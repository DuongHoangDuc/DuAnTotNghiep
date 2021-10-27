<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\PostCategory;
use App\Http\Requests\CategoryPost\ValidateCreate;
use App\Http\Requests\CategoryPost\ValidateUpdate;
class CategoryPost extends Controller
{
    //cho phan quyen dau e
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = PostCategory::all();
        return view('Backend.Category-post.index')->with(compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Category-post.create_category_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,ValidateCreate $validate)
    {
        $data = $request->all();
        $category = new PostCategory();
        $category->category_post_name = $data['category_post_name'];
        $category->category_post_slug = $data['category_post_slug'];
        $category->category_post_desc = $data['category_post_desc'];
        $category->category_post_status = '0';
        $category->save();

        Session()->put('message','Thêm Danh Mục bài Viết Thành Công');
        return Redirect('/admin/category-post');
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
        $category = PostCategory::find($id);
        return view('Backend.Category-Post.edit_category_post')->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id ,ValidateUpdate $validate)
    {
        
        $data = $request->all();
        $category =  PostCategory::find($id);
        $category->category_post_name = $data['category_post_name'];
        $category->category_post_slug = $data['category_post_slug'];
        $category->category_post_desc = $data['category_post_desc'];
        $category->category_post_status = '0';
        $category->update();
        Session()->put('message','Cập Nhập Danh Mục Bài Viêt Thành Công');
        return Redirect('/admin/category-post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = PostCategory::find($id);
        $category->delete();
        return Redirect('/admin/category-post');
    }
}
