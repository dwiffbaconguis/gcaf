@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto">
                <h1 class="my-4 text-center">Welcome to Golden City Alliance Fellowship!</h1>
                @foreach($posts as $post)
                    <div class="card mb-4">
                        <img src="{{ !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300' }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title text-center">{{ $post->title }}</h2>
                            <p class="card-text"> {{ Str::limit($post->body, $limit = 280, $end = '...')  }}</p>
                            <a href="/posts/{{ $post->id }}" class="btn btn-primary">Watch the video &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Post {{ $post->created_at->diffForHumans() }} by
                            <a href="#">{{ $post->user->name }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
