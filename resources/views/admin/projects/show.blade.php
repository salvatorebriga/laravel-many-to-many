@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">{{ $project->name }}</h1>

    <p><strong>Description:</strong> {{ $project->description }} </p>
    <p><strong>Category:</strong> {{ $project->category->name ?? 'N/A' }} </p>

    <p><strong>Technologies:</strong>
      @if ($project->technologies->isEmpty())
        N/A
      @else
        {{ $project->technologies->pluck('name')->implode(', ') }}
      @endif
    </p>

    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
  </div>
@endsection
