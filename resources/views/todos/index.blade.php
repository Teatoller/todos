@extends('layouts.main')
@section('content')

<h1>All Todo's List</h1>
@foreach($todo_lists as $list)
<h4><a href="/todos/{{$list->id}}">{{$list->name}}</a></h4>
<div>
<ul class="no-bullet button-group success tiny button" style="background-color: orange;">
    <li><a href="/todos/{{$list->id}}/edit">Edit/Delete</a></li><br />
</ul>
</div>

@endforeach
<div style="padding-top: 8px;">
<button class="success" style="background-color:lightgreen;"><a href="/todos/create">Create New Todo</a></button>
</div>

@endsection
