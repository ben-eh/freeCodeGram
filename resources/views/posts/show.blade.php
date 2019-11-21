@extends('layouts.app')

@section('content')

  <a href="/posts">Go Back</a>
  <h2>{{$post->title}}</h2>
  <div>
    {{$post->body}}
  </div>
  <hr>
  <small>Written on {{$post->created_at}}</small>
  <hr>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
  {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!! Form::close() !!}

@endsection
