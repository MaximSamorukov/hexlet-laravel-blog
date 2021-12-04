@extends('layouts.app')

@section('header')
Список статей
@endsection

@section('menu')
<div>
  <span><a href="articles/create">Добавить статью</a></span>
</div>
@endsection

@section('content')
@foreach ($articles as $article)
<h2>{{$article->name}}</h2>
<div>{{Str::limit($article->body, 200)}}</div>
<div>
  <span>
    <a href="articles/{{$article->id}}">Ссылка на статью
    </a>
  </span>
</div>
<div>
  <span>
    <a href="articles/{{$article->id}}/edit">Редактировать статью
    </a>
  </span>
</div>
<div>
  <span>
    <a data-method="delete" rel="nofollow" href="articles/{{$article->id}}">Удалить статью
    </a>
  </span>
</div>
@endforeach
{{ $articles->links() }}

<div>
  <a href="/">To the main page</a>
</div>
@endsection