@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

<div class="row">	
	{!! Form::model($post, ['route'=> ['posts.update',$post->id], 'method'=>'PUT']) !!}
	<div class="col-md-8">
		{{-- <h1> {{ $post->title }} </h1> --}}
		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title', null, ['class'=>'form-control input-lg']) }}

		{{ Form::label('slug', 'Slug:', ['class'=>'form-spacing-top']) }}
		{{ Form::text('slug', null, ['class'=>'form-control  ','minlength'=>'5','maxlength'=>'255']) }}
		
		{{ Form::label('body', 'Body:', ['class'=>'form-spacing-top']) }}
		{{ Form::textarea('body',null, ['class'=>'form-control']) }}

		{{-- <p class="lead">{{ $post->body }}</p> --}}
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<label>Url:</label>
				<p><a href="{{ url('blog/'.$post->slug) }}">{{url('blog/'.$post->slug)}}</a></p>
			</dl>

			<dl class="dl-horizontal">
				<label>Created at:</label>
				<p>{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</p>
			</dl>

			<dl class="dl-horizontal">
				<label>Last updated:</label>
				<p>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</p>
			</dl>
			<hr>

			<div class="row">
				<div class="col-md-6">
					{!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block')) !!}
					{{-- <a href="#" class="btn btn-primary btn-block">Edit</a> --}}
					
				</div>
				<div class="col-md-6">
					{{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block']) }}
					{{-- {!! Html::linkRoute('posts.update','Save',array($post->id),array('class'=>'btn btn-success btn-block')) !!} --}}
					{{-- <a href="#" class="btn btn-danger btn-block">Delete</a> --}}
				</div>
			</div>
		</div>

	</div>
	{!! Form::close() !!}
</div>

@stop

