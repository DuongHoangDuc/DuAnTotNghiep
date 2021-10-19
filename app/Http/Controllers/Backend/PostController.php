<?php

namespace App\Http\Controllers\Backend;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Post;
use App\Models\Backend\PostCategory;
use App\Http\Requests\Post\ValidateCreate;
use App\Http\Requests\Post\ValidateUpdate;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $post = Post::orderby('post_id')->paginate(10);
        $post = DB::table('tbl_post')->join('tbl_category_post','tbl_category_post.category_post_id','=','tbl_post.category_post_id')->get();
        return view('Backend.Post.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = PostCategory::orderby('category_post_id')->get();
        return view('Backend.Post.create_post')->with(compact('category'));
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
        $post = new Post();
        $post->post_title = $data['post_title'];
        $post->category_post_id = $data['category_post_id'];
        $post->post_slug = $data['post_slug'];
        $post->post_desc = $data['post_desc'];
        $post->post_content = $data['post_content'];
        $post->post_keywords = $data['post_keywords'];
        $post->post_status = '0';
        $post->post_meta_desc = $data['post_meta_desc'];

        if($request->has('post_images')){
            $get_images = $request->file('post_images');        
            $get_name_images = $get_images->getClientOriginalName();// lấy tên ảnh
            $name_image      = current(explode('.',$get_name_images));
            $new_image       = $name_image.rand(0,99).'.'.$get_images->getClientOriginalExtension();
            $get_images->move('Backend/uploads/posts',$new_image);
            $post->post_images = $new_image;
        }
        
        $post->save();

        Session()->put('message','Thêm bài Viết  Thành Công');
        return Redirect('/admin/post');
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
        $post = Post::find($id);
        $category = PostCategory::all();
         return view('Backend.post.edit_post')->with(compact('post'))->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,ValidateUpdate $validate)
    {
        $data = $request->all();
        $post =  Post::find($id);
        $post->post_title = $data['post_title'];
        $post->category_post_id = $data['category_post_id'];
        $post->post_slug = $data['post_slug'];
        $post->post_desc = $data['post_desc'];
        $post->post_content = $data['post_content'];
        $post->post_keywords = $data['post_keywords'];
        $post->post_status = '0';
        $post->post_meta_desc = $data['post_meta_desc'];

        $get_images = $request->file('post_images');

        if($get_images){
            // xoa anh cu
            $post_images_old = $post->post_images;
            $path = 'Backend/uploads/posts/'.$post_images_old; 
            unlink($path);
            // cap nhap anh mới
            $get_name_images = $get_images->getClientOriginalName();// lấy tên ảnh
            $name_image      = current(explode('.',$get_name_images));
            $new_image       = $name_image.rand(0,99).'.'.$get_images->getClientOriginalExtension();
            $get_images->move('Backend/uploads/posts/',$new_image);
            $post->post_images = $new_image;
           
        }
        $post->save();
        Session()->put('message','Cập Nhập Sản Phẩm Thành Công');
        return Redirect('/admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete(); 
        return Redirect('/admin/post');
    }
}
