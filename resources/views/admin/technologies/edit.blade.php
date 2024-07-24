@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Edit Technology</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST">
      @csrf
      @method('PATCH')

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $technology->name }}">
      </div>

      <button type="submit" class="btn btn-primary">Update Technology</button>
      <a href="{{ route('admin.technologies.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
@endsection
