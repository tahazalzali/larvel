@extends('layouts.app')


@section('content')
<div class="container pt-5 pb-5">
<div class="card">
    <div class="card-header">Showing: {{$post->title}}</div>
    <div class="card-body">

        <div class="card text-center">
            <div class="card-header">
             Post title : {{$post->title}}
            </div>
            <div class="card-body">
              <h5 class="card-title">Post Content: </h5>
              <p class="card-text">{{$post->content}}</p>
              <a href="{{route('posts.index')}}" class="btn btn-outline-primary">go back</a>
            </div>
            <div class="card-footer text-muted">
                created at:
      {{$post->created_at}}
            </div>
          </div>
  </div>
</div>
</div>
@endsection

