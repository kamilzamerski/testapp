@extends('layouts.layout')

@section('content')
    <div class="title m-b-md">
        {{$user->name}}
    </div>

    <h2>Pages:</h2>
    <div class="links">
        @foreach($user->pages as $page)
            <li><a href="/page/{{$page->id}}">{{$page->name}}</a></li>
        @endforeach
    </div>

    <h2>All tags:</h2>
    <div class="tags">
        @foreach($user->tags as $tag)
            <a href="">{{$tag->tag}}</a>
        @endforeach
    </div>
@endsection