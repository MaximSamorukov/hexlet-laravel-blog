@extends('layouts.app')

@section('content')
<h3>Cтатья {{$article->name}}</h3>
<div>{{Str::limit($article->body, 200)}}</div>
<div>
  <span>
    <a href="{{$article->id}}/edit">Редактировать статью
    </a>
  </span>
</div>
<div>
  <span>
    <a data-method="delete" rel="nofollow" href="/articles/{{$article->id}}">Удалить статью
    </a>
  </span>
</div>
<div>
  <a href="/articles">To the articles</a>
</div>
@endsection