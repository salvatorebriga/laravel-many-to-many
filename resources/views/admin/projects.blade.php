@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Projects</h1>
    <ul>
      @foreach ($data as $project)
        <li>{{ $project->name }}</li>
      @endforeach
    </ul>
  </div>
@endsection
