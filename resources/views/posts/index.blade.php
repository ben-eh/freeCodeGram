@extends('layouts.app')

@section('content')

  <h3>Posts</h3>

  @if(count($posts) > 0)
    @foreach($posts as $post)
    <div class="well">
      <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
      <small>Written by {{$post->user->name}}</small>
    </div>
    @endforeach
  @else
    <p>No posts found</p>
  @endif

  <button type="button"><a href="/posts/create" style="text-decoration: none">Add Post</a></button>

@endsection
