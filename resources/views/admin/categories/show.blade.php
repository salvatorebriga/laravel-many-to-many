@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Category Details</h1>
    <p><strong>ID:</strong> {{ $category->id }}</p>
    <p><strong>Name:</strong> {{ $category->name }}</p>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back to Categories</a>
  </div>
@endsection
