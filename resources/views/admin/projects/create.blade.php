@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Create New Project</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-control" id="category_id" name="category_id" required>
          <option value="">Select a category</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Create Project</button>
    </form>
  </div>
@endsection
