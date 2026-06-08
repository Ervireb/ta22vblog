@extends('partials.layout')
@section('title', 'Create tag')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 shadow-xl w-1/2 mx-auto">
            <div class="card-body">
                <form action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Name</span>
                        </div>
                        <input name="name" type="text" placeholder="Name" value="{{ old('name') }}"
                            class="input input-bordered @error('name') input-error @enderror w-full" required autofocus/>
                        <div class="label">
                            @error('name')
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </label>
                    <input type="submit" class="btn btn-primary" value="Create" />
                </form>
            </div>
        </div>
    </div>
@endsection
