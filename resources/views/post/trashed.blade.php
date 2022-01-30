<?php
use App\Models;
?>
@extends('layouts.app')


@section('content')


@if ($message=Session::get('success'))
<div class="pt-3 pb-3">
<div class="container mt-3 mb-3">
    <div class="alert alert-primary" role="alert">
      {{$message}}
      </div>
</div>
</div>
@endif

    <table class="table mt-5 mb-5 ">
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
                    <a class="btn btn-outline-success" href="{{route('soft.return',$post->id)}}">Return</a>
                  </div>
                  <div class="col-sm">
                    <a class="btn btn-outline-danger" href="{{route('final.delete',$post->id)}}">Permanent delete</a>
                  </div>
                  {{-- <div class="col-sm">
                    <a class="btn btn-outline-warning" href="{{route('soft.delete',$post->id)}}">Soft Delete</a>
                  </div> --}}
                  {{-- <div class="col-sm">
                    <form method="POST" action="{{route('posts.destroy',$post->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                  </div> --}}
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
