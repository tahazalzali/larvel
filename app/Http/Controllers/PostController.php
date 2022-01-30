<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{


    public function __construct(){
$this->middleware('auth');
    }
    public function first()
    {
        return view('post.index');
    }


    public function index()
    {
        //   $post=Post::all();
        //post all is to get all the data from the database



        $posts = Post::latest()->paginate(5);


        //latest is to get the latest data
        //paginate is to show the data in 5(the int we put) per page
        return view('post.index', compact('posts'));
        //conpact('varname') varname is to send varname with the view
    }
    public function withTrashed()
    {




        $posts = Post::onlyTrashed()->latest()->paginate(5);

        //with trashed is to get the data with trashed that the deleted at is not null

        return view('post.trashed', compact('posts'));

        //conpact('varname') varname is to send varname with the view
    }



    public function create()
    {
        //here we just need to add create view
        return view('post.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
             'photo'=>'required | image',

        ]);
          $photo= $request->photo;
          $newPhoto=time().$photo->getClientOriginalName();
          $photo->move('uploads/posts'.$newPhoto);

        //you  can not to create request
        //unless the validation is done
        $posts = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' =>$request->content,
             'photo'=>'uploads/posts'.$newPhoto,
             'slug'=>str_slug($request->title),
        ]);

        // $posts->save();
        return redirect()->back();// to back page
        // return redirect()->route('posts.index')
        //     ->with('success', "post added successfully");
        //create request all is to get all the data from the form



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug,$id)
    { //here we need to add show view
$postId=Post::find($id);
        $post= Post::where('slug',$slug)->first();
        return view('post.show',with('post',$post));
    }
    public function postsTrashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('post.trashed')->with('post', $posts);
    }




    public function edit($id)
    {
        $post=Post::find($id);
        return view('post.edit', with('post',$post));
    }



    public function update(Request $request, $id)
    {
        $post=Post::find($id);
        $request->validate([
            'title' => 'required',
            'content' => 'required',


        ]);
        if ($request->has('photo')){
            $photo= $request->photo;
            $newPhoto=time().$photo->getClientOriginalName();
            $photo->move('uploads/posts'.$newPhoto);
            $post->photo='uploads/posts'.$newPhoto;//to save post photo in db in the new directory
        }
        $post->title=$request->title;
        $post->content=$request->content;
        // $post->save;
        dd($request->all());
        return redirect()->back();

       // return redirect()->route('posts.index',with('post',$post));
        //here we must use update instead of create

        //you  can not to update request
        //unless the validation is done

        //create request all is to get all the data from the form


        //update as same as store
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id)->delete();
        return redirect()->back()->with('succeess', 'post deleted successfully');
    }


    public function hardDelte($id){
     $post=Post::withTrashed()->where('id',$id)->first();//here the 'id' is from database DONT forget to put first
    $post->forceDelete();
    }
    public function softDelete($id, Post $post)
    {
        $post->find($id)->delete();
        //you can to add delete directly
        //you can to add forceDelete to delete the data permanently
        return redirect()->route('posts.index')->with('succeess', 'post deleted successfully');
    }
    public function backFromsoftDelete($id)
    {
        $posts = Post::onlyTrashed()->where('id', $id)->restore();
        //restore function is to restore the soft deleted post to the main index

        return redirect()->route('posts.index')->with('succeess', 'post restored successfully');
    }

    public function forceDelete($id)
    {
        $posts = Post::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('posts.index')->with('success', 'post deleted permanently'); //if success if used
    }


};
