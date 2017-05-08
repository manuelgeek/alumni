@extends('main')

@section('title','| View post')

@section('content')
	<div class="col-md-8">
		<h1> {{ $post->title }} </h1>

		<p class="lead">{{ $post->body }}</p>
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Created at:</dt>
				<dd>{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Last updated:</dt>
				<dd>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr>

			<div class="row">
				<div class="col-md-6">
					{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}
					{{-- <a href="#" class="btn btn-primary btn-block">Edit</a> --}}
					
				</div>
				<div class="col-md-6">
					{!! Form::open(['route'=>['posts.destroy', $post->id],'method'=>'DELETE']) !!}

					{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}

					{!! Form::close() !!}
						
					{{-- {!! Html::linkRoute('posts.destroy','Delete',array($post->id),array('class'=>'btn btn-danger btn-block')) !!} --}}
					{{-- <a href="#" class="btn btn-danger btn-block">Delete</a> --}}
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					{!! Html::linkRoute('posts.index','<< See All Posts',[],array('class'=>'btn btn-default btn-block btn-h1-spacing')) !!}
				</div>

			</div>
		</div>

	</div>

@endsection