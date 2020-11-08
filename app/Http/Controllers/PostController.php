<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Category;
use App\SubCategory;
use App\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        //
        $posts = Post::all();
        $pages = Page::where('status','Active')->get();
        $categories = Category::where('status','Active')->get();
        $sub_categories = SubCategory::where('status','Active')->get();
        return view('admin.post.index',compact('posts','pages','categories','sub_categories'));
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
        $request->validate([
            'user_id'     =>  'required',
            'category_id'  =>  'required',
            'sub_category_id'  =>  'required',
            'page_id'   =>  'required',
            'title'   =>  'required',
            'status'    =>  'required',
            //'acceptance_mail'=>  'required|pdf|max:2048',
            //'payment_info'   =>  'required|pdf|max:2048',
            //'full_paper'     =>  'required|pdf|max:2048',
        ]);

        $post_file = $request->file('file');
        $new_post_file = rand() . '.' . $post_file->getClientOriginalExtension();
        $post_file->move(public_path('file'), $new_post_file);


        $form_data = array(
            'user_id'         =>   $request->user_id,
            'category_id'      =>   $request->category_id,
            'sub_category_id'      =>   $request->sub_category_id,
            'page_id'   =>   $request->page_id,
            'title'    =>   $request->title,
            'status'    =>   $request->status,
            'file'      =>   $new_post_file,
            
        );
        //var_dump($form_data);
       $data = Post::create($form_data);

        return redirect('/admin/post')->with('success', 'Successflully added');
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
