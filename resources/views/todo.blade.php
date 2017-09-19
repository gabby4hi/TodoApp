@extends('layout')

@section('content')

    @foreach ($todo as $todos)
        {{$todos->todo}}
        <hr>
        <br>
    @endforeach



@stop