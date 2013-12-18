@extends('layout')

@section('content')
Test
@stop

@section('whatelse')
@foreach($users as $user)
<p>{{ $user->name }}</p>
@endforeach
@stop