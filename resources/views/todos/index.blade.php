@extends('layouts.main')
@section('content')

<h1>All Todo's List</h1>
@foreach($todo_lists as $list)
<h4><a href="/todos/{{$list->id}}">{{$list->name}}</a></h4>
<ul class="no-bullet button-group success tiny button">
    <li><a href="/todos/{{$list->id}}/edit">Edit/Delete</a></li>
</ul>
@endforeach

<button class="success"><a href="/todos/create">Create New Todo</a></button>

@endsection
