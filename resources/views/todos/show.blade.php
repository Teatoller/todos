@extends('layouts.main')
@section('content')

<div class="large-12"columns>
<h1>{{{ $list->name }}}</h1>
@foreach($items as $item)
<h4>{{{ $item->content }}}</h4>
@endforeach
</div>
<h4><a href="/todos">back</a></h4>


@endsection
