@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Edit Project</h1>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
      @csrf
      @method('PATCH')

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{ $project->description }}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Update Project</button>
      <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
@endsection
