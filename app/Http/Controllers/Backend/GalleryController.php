<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Gallery;

class GalleryController extends Controller
{
    public function index($id){
        $product_id = $id;
        $data = [
            'product_id' => $product_id
        ];
        return view('Backend.gallery.index',$data);
    }

    public function gallery_all(Request $request){
        $product_id = $request->product_id;
       
        $gallery = Gallery::where('product_id',$product_id)->get();
        $count  = $gallery->count();
        $output = '';
        $output .= '   <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Hình Ảnh</th>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
        ';
        if($count>0){
            $i = 0;
            foreach($gallery as $value){
                $i++;
                $output.='  <tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$value->gallery_name.'</td>
                                <td><img src = "'.url('Backend/uploads/products/'.$value->gallery_image).'"></td>
                                <td><a class = "text-danger" href = "'.url('admin/gallery/delete-gallery/'.$value->gallery_id).'">Xóa</a></td>
                            </tr>
                        ';
            }
        }else{
            $output.='  <tr>
            <th scope="row">1</th>
            <td colspan = "4">Chưa có ảnh nào trong thư viện</td>
            
        </tr>

            ';
        }
        // echo $output;
        return response()->json($output);
    }
    public function store(Request $request ,$id){
        $get_images = $request->file('file');
       
        if($get_images){
            foreach($get_images as $image){
              
                $get_name_images = $image->getClientOriginalName();// lấy tên ảnh
                $name_image      = current(explode('.',$get_name_images));
                $new_image       = $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
                $image->move('Backend/uploads/products',$new_image);
                // $product->product_images = $new_image;
                $gallery = new Gallery();
                $gallery->gallery_name = $new_image;
                $gallery->gallery_image = $new_image;
                $gallery->product_id = $id;
                $gallery->save();

                
            }
           
            return redirect()->back();
            // dd($get_images);
        }
    }

    public function delete($id){
    $gallery = Gallery::find($id); 
    $gallery->delete();

    return redirect()->back();

    }
   
}
