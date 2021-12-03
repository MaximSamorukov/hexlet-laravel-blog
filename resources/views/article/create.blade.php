@extends('layouts.app')
@section('header')
Создание статьи
@endsection
@section('content')
{{ Form::model($article, ['url' => route('articles.store')]) }}
@include('article.form')
{{ Form::submit('Создать') }}
{{ Form::close() }}

@endsection