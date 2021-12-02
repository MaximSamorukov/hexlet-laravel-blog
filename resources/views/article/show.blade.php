@extends('layouts.app')

@section('content')
<h3>Cтатья {{$article->name}}</h3>
<div>{{Str::limit($article->body, 200)}}</div>
<div>
  <a href="/articles">To the articles</a>
</div>
@endsection