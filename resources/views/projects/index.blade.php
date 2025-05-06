@extends('layouts.app')

@section('content')
<div class="row">
    @include('components.sidebar')
    <div class="d-flex flex-column col-10">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('projects.create') }}" class="btn btn-primary">
                    Create
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light">
                <h2>Projects</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td><a href="{{ route('compounds.index', $project->id) }}">{{ $project->name }}</a></td>
                                <td><a href="{{ route('projects.edit', $project->id) }}">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
