@extends('layouts.main')
@section('content')

<h1>All Todo's List</h1>
<ul>
@foreach($todo_lists as $list)
<li>{{{$list->name}}}</li>
@endforeach
</ul>


@endsection
