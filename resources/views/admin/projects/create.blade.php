@extends('layouts.app')

@section('content')
<div class="container" id="posts-container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{route('admin.projects.store') }}" method="POST">
                @csrf

                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="exampleFormControlInput1" class="form-label">
                        Name
                    </label>
                    <input type="text" class="form-control" id="name" placeholder="Insert your project's name" name="name">
                </div>

                @error('goal')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="image" class="form-label">
                        Goal
                    </label>
                    <input type="text" class="form-control" id="goal" placeholder="Insert the project's" name="goal">
                </div>

                @error('link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="content" class="form-label">
                        Link
                    </label>
                    <textarea class="form-control" id="link" rows="1" name="link">
                    </textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="me-3">
                        Add new project
                    </button>
                    <button type="reset">
                        Reset
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection