@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">
                            Name
                        </th>
                        <th scope="col">
                            Goal
                        </th>
                        <th scope="col">
                            Link
                        </th>
                        <th scope="col">
                            Edit
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <th>
                            {{ $project->name}}
                        </th>
                        <td>
                            {{ $project->goal}}
                        </td>
                        <td>
                            {{ $project->link}}
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-success">
                            <a href="" class="btn btn-sm btn-success">
                                Edit
                            </a>
                            <a href="" class="btn btn-sm btn-warning">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $projects->links() }}
        </div>
    </div>
</div>
@endsection
