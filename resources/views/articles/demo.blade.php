@extends('layout')
@section('content')
@foreach ($articles as $article)
   <h1>{{$article->title}} </h1>
@endforeach
@endsection
