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
                <form method="post" action="{{ route('projects.update', $project->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <h2>Edit project</h2>
                    <div class="mb-3">
                        <label for="projectName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="projectName" id="projectName" placeholder="name of project" value="{{ $project->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="projectDescription" class="form-label">Description</label>
                        <textarea class="form-control" name="projectDescription" id="projectDescription" rows="3">{{ $project->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="projectType" class="form-label">Type</label>
                        <input type="text" class="form-control" name="projectType" id="projectType" placeholder="type of project" value="{{ $project->type }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('projects.destroy',$project->id) }}">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Delete project</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the project "{{ $project->name }}"?</p>
                    <p>Deleting the project will also delete all associated data. This cannot be undone.</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="deleteProject" required>
                        <label class="form-check-label" for="deleteProject">
                            I confirm that I wish to delete this project.
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
