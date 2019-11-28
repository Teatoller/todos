@extends('layouts.main')
@section('content')
    <h1>Hi!</h1>
<?php
$data = [
    "name" => "Nigel",
    "email" => "nigel@test.com",
    "location" => "Nairobi",
    "lastName" => "Ennis",
];
?>
    @if(isset($data['lastName']))
    {{$data['lastName']}}
    @else
    'no last name provided'
    @endif
    <hr />
    @foreach($data as $item)
    <li>{{$item}}</li>
    @endforeach
@endsection