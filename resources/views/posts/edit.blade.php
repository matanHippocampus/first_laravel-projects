@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>    
    {!! Form::open(['action' => ['PostsControllers@update', $post->id], 'method'=> 'PUT']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder'=> 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor','class' => 'form-control', 'placeholder'=> 'Body'])}}
    </div>
    {{Form::submit('Edit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
