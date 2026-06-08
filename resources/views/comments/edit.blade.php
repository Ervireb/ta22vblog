@extends('partials.layout')

@section('title', 'Edit comment')

@section('content')
<div class="container mx-auto">
    <div class="card bg-base-300 shadow-xl w-1/2 mx-auto">
        <div class="card-body">

            <form action="{{ route('comments.update', $comment) }}" method="POST">
                @csrf
                @method('PUT')

                <textarea name="body"
                          class="textarea textarea-bordered w-full"
                          rows="5">{{ old('body', $comment->body) }}</textarea>

                <button class="btn btn-primary mt-2">
                    Save
                </button>

            </form>

        </div>
    </div>
</div>
@endsection