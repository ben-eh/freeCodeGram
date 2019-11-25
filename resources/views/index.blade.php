@extends('layouts.app')

@section('content')
  <h1>{{$title}}</h1>
  <p>This is the laravel application from the "Laravel From Scratch" YouTube series.</p>
  <ul>
    @if(count($posts) > 0)
      @foreach($posts as $post)
        <div>
          <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
          <h6>check</h6>
          <br>
        </div>
      @endforeach
    @else
      <p>No posts found. Be the first to create one here.</p>
    @endif
  </ul>
@endsection

