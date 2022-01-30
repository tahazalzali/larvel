<?php

namespace App\Http\Controllers;//Directory
//Class in laravel starts with a CAPITAL letter
use App\Models\Fb_post;//Model
use Illuminate\Http\Request;//Request

class FbPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Fb_post::all();
       return view('products.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fb_post  $fb_post
     * @return \Illuminate\Http\Response
     */
    public function show(Fb_post $fb_post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fb_post  $fb_post
     * @return \Illuminate\Http\Response
     */
    public function edit(Fb_post $fb_post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fb_post  $fb_post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fb_post $fb_post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fb_post  $fb_post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fb_post $fb_post)
    {
        //
    }


    public function softDeletes($id){
        $post=Fb_post::find($id)->delete();
        return redirect()->route('products/index')
        ->with('success','Post inserted succesfully');
    }
}




















