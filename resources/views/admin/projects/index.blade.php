@extends('layouts/admin')

@section('content')


<table class="mt-5 table table-striped">
  <thead>
    <th>Titolo</th>
    <th>Descrizione</th>
    <th>Contenuto</th>
    <th>Slug</th>
    <th>Comandi</th>
  </thead>

  <tbody>

    @foreach($projects as $project)
    <tr >
        <td>{{$project->title}}</td>
        <td>{{$project->description}}</td>
        <td>{{$project->content}}</td>
        <td>{{$project->slug}}</td>
        <td>
            <a href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="{{route('admin.projects.edit', $project->slug)}}"><i class="fa-solid fa-pen"></i></a>
        </td>
    </tr>
    @endforeach


  </tbody>
</table>
@endsection