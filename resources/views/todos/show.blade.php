@extends('layouts.main')
@section('content')

<div class="large-12"columns>
<h1>{{{ $list->name }}}</h1>
@foreach($items as $item)
<h4>{{{ $item->content }}}</h4>
<ul class="no-bullet button-group success tiny button">
    <li><a href="/tasks/{{$item->id}}/edit">Edit/Delete</a></li><br />
</ul>
@endforeach
</div>
<form method="POST" action="http://127.0.0.1:8000/tasks/" accept-charset="UTF-8">
@csrf

<label for="content">To-Do Item</label>
<input name="content" type="text" id="content">
{{{$errors->first('content', ':message')}}} <br/>
<div style="display:none">
<label for="todo_list_id">Foreign Key, Do not fill</label>
<input name="todo_list_id" type="text" id="todo_list_id" value="{{ $list->id }}">
</div>
<button class="button" type="submit" value="submit">Submit</button>
</form>

<h4><a href="/todos">back</a></h4>

@endsection
