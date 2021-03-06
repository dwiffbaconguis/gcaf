@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <br>
          <h3 class="mt-4">
            {{ $post->title }}
            <span class="lead">by <a href="#">{{ $post->user->name }}</a></span>
          </h3>
          <hr>
          <p>Posted {{ $post->created_at->diffForHumans() }}</p>
          <hr>
          <div class="embed-responsive embed-responsive-21by9">
            {!! $videoHtmlEmbeddedlink !!}
          </div>
          <hr>
          <div>
            <p>{{ $post->body }}</p>
            <hr>
          </div>

          @auth
          <Comments
              :post-id='@json($post->id)'
              :user-name='@json(auth()->user()->name)'>
          </Comments>
          @endauth
        </div>
      </div>
    </div>
    @endsection
