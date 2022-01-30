@extends('layouts.app')
@section('content')
<div class="container pt-5 pb-5">
<div class="card">
    <div class="card-header">Update: {{$post->title}}</div>
    <div class="card-body">

      <form action="{{route('posts.update',$post->id)}}" method="POST"  class="container">
        @csrf
        @method('PUT')
            <div class="form-group pt-4 ">
                <h3>Update a post </h3>
                <label for="title">Title</label>
                <input name="title" value="{{$post->title}}" type="text" class="form-control" id="title" placeholder="title">
              </div>


            <div class="form-group">
              <label for="content">Content</label>
              <textarea name="content" class="form-control" id="content" rows="3">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
            <button  class="btn btn-outline-primary mt-2 mb-2" type="submit">Update</button>
            </div>
          </form>
  </div>
</div>
</div>

@endsection

