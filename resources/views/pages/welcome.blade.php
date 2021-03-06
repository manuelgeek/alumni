@extends('main')
    @section('title', '| Home')
    
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Welcome to My Blog</h1>
                  <p>Read my latest blogs here. Trial web with Laravel </p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Porpular Post</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">

            @foreach($posts as $post)
                <div class="post">
                    <img src="{{ asset('images/'.$post->image) }}" height="400" width="800" />
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr(strip_tags($post->body), 0,300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }} </p>
                    <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                </div>
                <hr>

                @endforeach
              
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Side Bar</h2>
            </div>
        </div>
   @endsection