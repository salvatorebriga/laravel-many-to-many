@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Projects</h1>
    <ul>
      @foreach ($projects as $project)
        <li>{{ $project->name }}</li>
      @endforeach
    </ul>
  </div>
@endsection
