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
                                <td><a class = "btn btn-xs btn-danger delete-gallery" href = "'.url('/admin/gallery/delete/'.$value->gallery_id) .'">xóa</a></td>
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
        //  <td><button data-gallery_id="'.$value->gallery_id.'" class = "btn btn-xs btn-danger delete-gallery" width ="80px" > Xóa</button></td>
        return response()->json($output);
    }
    public function store(Request $request ,$id){
        
        // dd($request->file('file'));
  
        if($request->hasfile('files')){
            $images = $request->file('files');
            foreach($images as $image){

                $name = $image->getClientOriginalName();
 
                $image->move(public_path('Backend/uploads/products'), $name);
                Gallery::create([
                     'gallery_name' => 'Product',
                     'gallery_image' => $name,
                     'product_id' => $id
                ]);
 
            }
        }

       
           


       return redirect()->back();
       
    }
    public function delete(Request $request,$id){
        $gallery = Gallery::find($id);
        $image = $gallery->gallery_image;
        unlink('Backend/uploads/products/'.$image);
        $gallery->delete();
        return redirect()->back();
    }
}
