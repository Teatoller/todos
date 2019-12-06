@extends('layouts.main')
@section('content')
<form method="POST" action="http://127.0.0.1:8000/todos/{{$list->id}}" accept-charset="UTF-8">
    @method('PATCH')
@csrf
<label for="name"><strong>Title List</strong></label>
<input name="name" type="text" id="name" placeholder="name" value="{{ $list->name }}">
{{{$errors->first('name', ':message')}}} <br/>
<button class="button" type="submit" value="submit">Update</button>
</form>

<form method="POST" action="http://127.0.0.1:8000/todos/{{$list->id}}" accept-charset="UTF-8">
    @method('DELETE')
@csrf
<div>
<button class="button-group alert" type="submit" value="submit">Delete</button>
</div>
<h4><a href="/todos">Back to todos</a></h4>

</form>

@endsection
