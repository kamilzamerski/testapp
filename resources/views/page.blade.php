@extends('layouts.layout')

@section('content')
    <div class="title m-b-md">
        {{$page->name}}
    </div>

    <p>{{$page->content}}</p>

    <h2>Tags:</h2>
    <div class="tags">
        @foreach($page->tags as $tag)
            <a href="">{{$tag->tag}}</a>
        @endforeach
    </div>

    <h2>User:</h2>
    <div class="tags">
        <a href="/user/{{$page->user->id}}">{{$page->user->name}}</a>
    </div>
@endsection