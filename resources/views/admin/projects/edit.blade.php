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
        <textarea class="form-control" id="description" name="description" rows="5">{{ $project->description }}</textarea>
      </div>

      <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-control" id="category_id" name="category_id" required>
          <option value="">Select a category</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $project->category_id == $category->id ? 'selected' : '' }}>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Update Project</button>
      <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
@endsection
