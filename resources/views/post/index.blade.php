<?php
use App\Models;
?>
@extends('layouts.app')

@section('content')


@if ($message=Session::get('success'))
<div class="container">
    <div class="alert alert-primary" role="alert">
      {{$message}}
      </div>
</div>
@endif

    <table class="table  mt-5 mb-5">
        <thead>
          <tr>
            <th scope="col">Post</th>

            <th scope="col">type</th>
            <th scope="col">Id</th>
          </tr>
        </thead>
        <tbody>
         @php
        $i=0;
        @endphp

        @foreach($posts as $post)
        <tr>
            <th scope="row">{{++$i}}</th>

            <th>{{$post->title}}</th>
            <th>{{$post->id}}</th>
            <th><div class="container">
                <div class="row">
                  <div class="col-sm">
                    <a class="btn btn-outline-primary" href="{{route('posts.show',$post->id)}}">show</a>
                  </div>
                  <div class="col-sm">
                    <a class="btn btn-outline-success" href="{{route('posts.edit',$post->id)}}">Update</a>
                  </div>
                  <div class="col-sm">
                    <a class="btn btn-outline-warning" href="{{route('soft.delete',$post->id)}}">Soft Delete</a>
                  </div>

                </div>
              </div>

            {{-- <a href="{{route('posts')}}}"></a> --}}


        @endforeach
            </th>
        </tr>
        </tbody>

      </table>
      {{$posts->links()}}
  </div>

@endsection
