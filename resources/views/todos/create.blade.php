@extends('layouts.main')
@section('content')

<form method="POST" action="http://127.0.0.1:8000/todos" accept-charset="UTF-8">
@csrf
<label for="name">Title List</label>
<input name="name" type="text" id="name">
<button class="button" type="submit" value="submit">Submit</button>
</form>

@endsection
