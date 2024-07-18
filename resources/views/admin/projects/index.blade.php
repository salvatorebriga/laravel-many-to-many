{{-- resources/admin/projects/index.blade.php --}}

@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Projects</h1>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">description</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
          <tr>
            <th scope="row" class="col">{{ $project->id }}</th>
            <td class="col-2">{{ $project->name }}</td>
            <td class="col-8">{{ $project->description }}</td>
            <td class="col">
              <div class="btn-group" role="group" aria-label="Project Actions">
                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary" role="button">
                  <i class="fas fa-pencil"></i>
                </a>
                <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-warning" role="button">
                  <i class="fas fa-search"></i>
                </a>
                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this project?')">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
