@extends('partials.layout')
@section('title', $post->title)
@section('content')
    <div class="container mx-auto">
        @include('partials.post-card')
        @if(auth()->check())
        <form action="{{ route('comments.store', $post) }}" method="POST">
            @csrf
            
            <button class="btn btn-primary mt-2">
                Add comment
            </button>

            <textarea name="body" class="textarea textarea-bordered w-full"></textarea>
        </form>
        @endif

        <h3 class="text-2xl">Comments:</h3>
        @foreach($post->comments()->latest()->get() as $comment)
            <div class="card bg-base-200 shadow-xl mt-3">
                <div class="card-body">

                    <p>{{ $comment->body }}</p>

                    <p class="text-neutral-content">
                        {{ $comment->created_at->diffForHumans() }}
                    </p>

                    <p class="text-neutral-content">
                        {{ $comment->user->name }}
                    </p>

                    @auth
                        @if(auth()->id() === $comment->user_id)
                            <div class="card-actions justify-end">

                                <a href="{{ route('comments.edit', $comment) }}"
                                class="btn btn-sm btn-secondary">
                                    Edit
                                </a>

                                <form action="{{ route('comments.destroy', $comment) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-sm btn-error">
                                        Delete
                                    </button>
                                </form>

                            </div>
                        @endif
                    @endauth

                </div>
            </div>
        @endforeach
    </div>
@endsection
