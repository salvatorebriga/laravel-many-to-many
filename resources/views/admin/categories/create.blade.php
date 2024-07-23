@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Create New Category</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.categories.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
  </div>
@endsection
