@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">{{ $project->name }}</h1>

    <p><strong>Description:</strong> {{ $project->description }}</p>

    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
  </div>
@endsection
