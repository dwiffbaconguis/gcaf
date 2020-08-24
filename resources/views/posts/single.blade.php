@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="mt-4"> {{ $post->title }}</h3>
                <hr>
                <p>Posted {{ $post->created_at->diffForHumans() }}</p>
                <hr>
                <img class="img-fluid rounded" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300' !!} " alt="">
                <hr>
                <p class="lead"> {{ $post->body }} </p>
                <hr>
                <div class="card my-4">
                    <h5 class="card-header">Leave a comment:</h5>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <textarea id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-primary" type="button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
