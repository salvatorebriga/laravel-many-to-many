@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Edit Category</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
      @csrf
      @method('PATCH')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
      </div>
      <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
  </div>
@endsection
