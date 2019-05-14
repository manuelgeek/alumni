@extends('main')

@section('title','| View post')

@section('content')
	<div class="col-md-8">
		<img src="{{ asset('images/'.$post->image) }}" height="400" width="800" />
		
		<h1> {{ $post->title }} </h1>

		<p class="lead">{!! $post->body !!}</p>
	
		<div id="backend-comments" style="margin-top: 50px;">
			<h3>Comments <small>{{ $post->comments()->count() }}</small></h3>
			<table class="table">
				<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Comment</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
					@foreach( $post->comments as $comment)
					<tr>
						<td>{{ $comment->name }}</td>
						<td>{{ $comment->email }}</td>
						<td>{{ $comment->comment }}</td>
						<td>
							<a href="{{ route('comments.edit', $comment->id ) }}" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
							<a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<label>Url:</label>
				<p><a href="{{ url('blog/'.$post->slug) }}">{{url('blog/'.$post->slug)}}</a></p>
			</dl>

			<dl class="dl-horizontal">
				<label>Category:</label>
				<p>{{ $post->category->name }}</p>
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