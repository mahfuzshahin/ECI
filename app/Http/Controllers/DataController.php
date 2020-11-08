<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class DataController extends Controller
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
    public function about(){
        return view('page.about');
    }
    public function sdg(){
        return view('page.sdg');
    }
    public function team(){
        return view('page.team');
    }
    public function single_window(){
        return view('page.single_window');
    }
    public function agriculturul_development(){
        $posts = Post::where('page_id',1)->where('category_id',1)->get();
        return view('single_window.agriculturul_development',compact('posts'));
    }
    public function business_tred(){
        $posts = Post::where('page_id',1)->where('category_id',2)->get();
        return view('single_window.business_tred',compact('posts'));
    }
    public function ict_development(){
        $posts = Post::where('page_id',1)->where('category_id',3)->get();
        return view('single_window.ict_development',compact('posts'));
    }
    public function science_innovation(){
        $posts = Post::where('page_id',1)->where('category_id',4)->get();
        return view('single_window.science_innovation',compact('posts'));
    }
    public function sme_development(){
        $posts = Post::where('page_id',1)->where('category_id',5)->get();
        return view('single_window.sme_development',compact('posts'));
    }
    public function taxation(){
        $posts = Post::where('page_id',1)->where('category_id',6)->get();
        return view('single_window.taxation',compact('posts'));
    }
    public function report_publication(){
        return view('report_publication.index');
    }
    public function national(){
        $posts = Post::where('page_id',11)->get();
        return view('report_publication.national',compact('posts'));
    }
    public function global(){
        $posts = Post::where('page_id',12)->get();
        return view('report_publication.global',compact('posts'));
    }
    public function sectoral_report(){
        $posts = Post::where('page_id',13)->get();
        return view('report_publication.sectoral_report',compact('posts'));
    }
    public function diu_publication(){
        return view('report_publication.diu_publication');
    }

    public function industry_academia(){
        $posts = Post::where('page_id',7)->get();
        return view('page.industry_academia',compact('posts'));
    }
    public function webiner(){
        $posts = Post::where('page_id',8)->get();
        return view('page.webiner',compact('posts'));
    }
    public function training_development(){
        $posts = Post::where('page_id',9)->get();
        return view('page.training_development',compact('posts'));
    }
    public function entrepreneurship_cafe(){
        $posts = Post::where('page_id',4)->get();
        return view('page.entrepreneurship_cafe',compact('posts'));
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
