@extends('layouts.admin')

@section('content')
  <div class="conatiner">
    @include('partials.go_back')
    <h2>Welcome to the Edit section!</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>

        @foreach ($errors->all() as $error)
  
          <li>
              {{$error}}
          </li>
            
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{ route('admin.projects.update',['project'=>$project->slug]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input  type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $project->title  }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="2" name="description"> {{ old('description') ?? $project->description }} </textarea>
      </div>

      
      <div class="mb-3">
        <label for="type" class="form-label">Project Type</label>
        <select name="type_id" id="type" class="form-select">
          <option value="">Select one Type</option>
          @foreach ($types as $type)

          <option @selected(old($project->type?->name) ?? $project->type?->name == $type->name) value="{{ $type->id }}">{{ $type->name }}</option>
              
          @endforeach
        </select>
      </div>

        <button class="btn btn-success">Save</button>
    </form>
  </div>
@endsection