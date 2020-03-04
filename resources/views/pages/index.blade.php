@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <p>this is test</p>
        <a href="/login" class="btn btn-primary">Login</a>
        <a href="/register" class="btn btn-success">Register</a>
@endsection