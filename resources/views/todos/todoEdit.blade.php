@extends('layouts.main')
@section('content')
<form method="POST" action="http://127.0.0.1:8000/tasks/{{$item->id}}" accept-charset="UTF-8">
    @method('PATCH')
@csrf
<label for="content"><strong>To-do Item</strong></label>
<input name="content" type="text" id="content" placeholder="content" value="{{ $item->content }}">
{{{$errors->first('content', ':message')}}} <br/>
<button class="button" type="submit" value="submit">Update</button>
</form>

<form method="POST" action="http://127.0.0.1:8000/tasks/{{$item->id}}" accept-charset="UTF-8">
    @method('DELETE')
@csrf
<div>
<button class="button-group alert" type="submit" value="submit">Delete</button>
</div>
<h4><a href="/todos">Back to todos</a></h4>

</form>

@endsection
