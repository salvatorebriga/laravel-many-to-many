@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Edit Project</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
      @csrf
      @method('PATCH')

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $project->description }}</textarea>
      </div>

      <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-control" id="category_id" name="category_id">
          <option value="">Select Category</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $project->category_id ? 'selected' : '' }}>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Technologies</label><br>
        @foreach ($technologies as $technology)
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="technologies[]" id="technology_{{ $technology->id }}"
              value="{{ $technology->id }}" {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
            <label class="form-check-label" for="technology_{{ $technology->id }}">
              {{ $technology->name }}
            </label>
          </div>
        @endforeach
      </div>

      <button type="submit" class="btn btn-primary">Update Project</button>
      <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
@endsection
