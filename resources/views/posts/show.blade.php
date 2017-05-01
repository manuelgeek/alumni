@extends('main')

@section('title','| View post')

@section('content')
	
	<h1> {{ $post->title }} </h1>

	<p class="lead">{{ $post->body }}</p>

@endsection