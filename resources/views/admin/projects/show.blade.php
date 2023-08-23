@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">
                    Featured
                </h5>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $project->name}}
                    </h5>
                    <p class="card-text">
                        {{ $project->goal}}
                    </p>
                    <a href="#" class="btn btn-primary">
                        {{ $project->link}}
                    </a>
                    <p class="mt-3">
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
