@extends('layouts.app')

@section('content')
<div class="row">
    @include('components.sidebar')
    <div class="d-flex flex-column col-10">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('projects.index') }}">
                    Back
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light">
                <form method="post" action="{{ route('projects.store') }}">
                    @csrf
                    <h2>New project</h2>
                    <div class="mb-3">
                        <label for="projectName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="projectName" id="projectName" placeholder="name of project">
                    </div>
                    <div class="mb-3">
                        <label for="projectDescription" class="form-label">Description</label>
                        <textarea class="form-control" name="projectDescription" id="projectDescription" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="projectType" class="form-label">Type</label>
                        <input type="text" class="form-control" name="projectType" id="projectType" placeholder="type of project">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
