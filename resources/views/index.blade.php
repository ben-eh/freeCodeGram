@extends('layouts.app')

@section('content')
  <h1>{{$title}}</h1>
  <ul>
    @if(count($posts) > 0)
      @foreach($posts as $post)
        <div>
          <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
          <h6>{{$post->short_body}}</h6>
          <br>
          <small>Written by {{$post->user->name}}</small>
        </div>
      @endforeach
    @else
      <p>No posts found. Be the first to create one here.</p>
    @endif
  </ul>
@endsection

