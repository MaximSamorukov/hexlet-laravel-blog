@extends('layouts.app')

@section('content')
<h1>Список статей</h1>
@foreach ($articles as $article)
<h2>{{$article->name}}</h2>
<div>{{Str::limit($article->body, 200)}}</div>
<div>
  <span>
    <a href="articles/{{$article->id}}">Ссылка на статью
    </a>
  </span>
</div>
@endforeach
{{ $articles->links() }}

<div>
  <a href="/">To the main page</a>
</div>
@endsection