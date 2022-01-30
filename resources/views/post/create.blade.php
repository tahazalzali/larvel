@extends('layouts.app')

@section('content')
<style>
    .form-group{
        padding-top:1%;
        padding-bottom:1%;
    }
</style>
    <div class="container pt-5 pb-5">
        <div class="card">
            <div class="card-header">Post</div>
            <div class="card-body">
                @if (count($errors) > 0)
                    <ul>

                        @foreach ($errors->all() as $error)
                            <li>
                                <div class="alert alert-danger ">
                                    {{ $error }}
                                </div>
                            </li>
                        @endforeach

                    </ul>
                @endif
                <form action="{{ route('posts.store') }}" method="POST" class="container" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group pt-4 ">
                        <h3>Add a post </h3>
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="title">
                    </div>


                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="file">Photo</label>
                        <input type="file" name="photo" class="form-control" id="file" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-primary mt-2 mb-2" type="submit">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
