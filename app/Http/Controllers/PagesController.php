<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;

class PagesController extends Controller
{

  public function index() {
    $title = 'Newest Posts';
    // return view('index', compact('title'));
    // $posts = Post::take(5)->get()->sortBy('created_at', 'desc')->get();
    // $posts = Post::paginate(3);
    $posts = Post::take(5)->orderBy('created_at', 'desc')->get();
    // $test = Str::limit('here I go again on my own', 10);
    // return view('index')->with('title', $title)->with('posts', $posts)->with('test', $test);
    return view('/index')->with('title', $title)->with('posts', $posts);
  }

}
