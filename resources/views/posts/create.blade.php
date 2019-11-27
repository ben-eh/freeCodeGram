@extends('layouts.app')

@section('content')

  @if(count($errors) > 0)
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif

  <h3>Create Post</h3>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
      {{Form::label('body', 'Body')}}
      {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}

  <button type="button"><a href="/posts" style="text-decoration: none">Cancel</a></button>

@endsection
