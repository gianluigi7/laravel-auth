@extends('layouts.app')

@section('content')

<h1>Progetti</h1>

@foreach ($projects as $project)
 {{$project->title}}
 <a href="{{ route('admin.projects.show', $projects) }}"></a><button>mostra</button>
@endforeach


<a as='button' href="{{ route('admin.projects.create') }}">crea</a>
@endsection