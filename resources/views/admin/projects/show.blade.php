@extends('layouts.admin')

@section('content')
  <div class="container mt-3 p-2">
    <a href="{{ url()->previous() }}">Go back</a>
    <h2>Project details:</h2>
    <h3><strong>Title: </strong>{{ $project->title }}</h3>
    <p><strong>Description: </strong>{{ $project->description }}</p>
    <p><strong>Slug: </strong>{{ $project->slug }}</p>
    <p><strong>Creation date: </strong>{{ $project->created_at }}</p>
    <p><strong>Project Type: </strong>{{ $project->type?->name }}</p>
    

    <div class="d-flex gap-2">

      @include('partials.editbtn')
      @include('partials.delete')

    </div>
  </div>
@endsection