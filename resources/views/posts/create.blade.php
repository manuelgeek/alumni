@extends('main')
	@section('title', '| Create new post')

	@section('stylesheets')
		{!! Html::style('css/parsley.css') !!}
		 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
		  <script>tinymce.init({ 
		  	selector:'textarea',
		  	plugins:'link code',
		  	menubar: false
		  	 });</script>
	@endsection

	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<h1>Create new post here</h1>
			<hr>
			{!! Form::open(['route' => 'posts.store','data-parsley-validate'
			=> '','files'=>true]) !!}
			   {{ Form::label('title','Title:')}} 
			   {{ Form::text('title',null,array('class' => 'form-control','required'=>'' ))}}
			   {{ Form::label('slug','Slug: ')}} 
			   {{ Form::text('slug',null,array('class' => 'form-control','required'=>'', 'minlength'=>'5','maxlength'=>'255' ))}}

			   {{ Form::label('category_id','Category') }}
			   <select class="form-control" name="category_id">
			   	@foreach ($categories as $category)
			   		<option value="{{ $category->id }}">{{ $category->name }}</option>
			   	@endforeach
			   </select>

			   {{ Form::label('featured_image','Upload Image:')}} 
			   {{ Form::file('featured_image') }}

			   {{ Form::label('body','Post Body:')}} 
			   {{ Form::textarea('body',null,array('class' => 'form-control' ))}}

			   {{ Form::submit('Create Post',array('class'=> 'btn btn-success btn-block btn-lg', 'style' => 'margin-top:20px;'))}}

			{!! Form::close() !!}
			</div>
		</div>
	@endsection

	@section('scripts')
		{!! Html::script('js/parsley.min.js') !!}
	@endsection