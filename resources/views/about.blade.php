@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'О блоге')
@section('header')
<h1>О блоге</h1>
@endsection
<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
<p>Эксперименты с Laravel на Хекслете</p>
@endsection

@section('courses')
<div>
    <span>{{implode(' | ', $tags)}}</span>
</div>
<div>
    <a href="/">To the main page</a>
</div>
@endsection