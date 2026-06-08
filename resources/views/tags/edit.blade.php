@extends('partials.layout')
@section('title', 'Edit ' . $tag->name)
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 shadow-xl w-1/2 mx-auto">
            <div class="card-body">
                <form action="{{ route('tags.update', ['tag' => $tag]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Name</span>
                        </div>
                        <input name="name" type="text" placeholder="Name" value="{{ old('name') ?? $tag->name }}"
                            class="input input-bordered @error('name') input-error @enderror w-full" required autofocus/>
                        <div class="label">
                            @error('name')
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </label>
                    <input type="submit" class="btn btn-primary" value="Update" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
