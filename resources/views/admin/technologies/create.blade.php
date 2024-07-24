@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Create New Technology</h1>

    <form action="{{ route('admin.technologies.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <button type="submit" class="btn btn-primary">Create Technology</button>
    </form>
  </div>
@endsection
