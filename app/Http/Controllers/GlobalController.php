<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function global(){
        return view('global.index');
    }
    public function agriculturul_development(){
        $posts = Post::where('page_id',12)->where('category_id',1)->get();
        return view('global.agriculturul_development',compact('posts'));
    }
    public function business_tred(){
        $posts = Post::where('page_id',12)->where('category_id',2)->get();
        return view('global.business_tred',compact('posts'));
    }
    public function ict_development(){
        $posts = Post::where('page_id',12)->where('category_id',3)->get();
        return view('global.ict_development',compact('posts'));
    }
    public function science_innovation(){
        $posts = Post::where('page_id',12)->where('category_id',4)->get();
        return view('global.science_innovation',compact('posts'));
    }
    public function sme_development(){
        $posts = Post::where('page_id',12)->where('category_id',5)->get();
        return view('global.sme_development',compact('posts'));
    }
    public function taxation(){
        $posts = Post::where('page_id',12)->where('category_id',6)->get();
        return view('global.taxation',compact('posts'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
