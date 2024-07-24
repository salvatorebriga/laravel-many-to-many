@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">{{ $technology->name }}</h1>

    <div>
      <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"
          onclick="return confirm('Are you sure you want to delete this technology?')">Delete</button>
      </form>
      <a href="{{ route('admin.technologies.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
  </div>
@endsection
