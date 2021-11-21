<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;
use App\Http\Requests\Slider\ValidateCreate;
use App\Http\Requests\Slider\ValidateUpdate;

class SliderController extends Controller
{
    public function index(){
        $slider = Slider::orderby('slider_id','desc')->get();
        $data = [
            'slider' => $slider
        ];
        return view('Backend.slider.slider',$data);
    }

    public function create(){
        return view('Backend.slider.add_slider');
    }

    public function store(Request $request ,ValidateCreate $validate ){
      
        $data = $request->all();
        $slider = new Slider();
        $slider->slider_name = $data['slider_name'];
        $slider->slider_status = $data['slider_status'];
        $slider->slider_desc = $data['slider_desc'];
        if($request->has('slider_image')){

            $images = $request->file('slider_image');      
            $name = $images->getClientOriginalName();// lấy tên ảnh
            $name_image      = current(explode('.',$name));
            $new_image       = $name_image.rand(0,99).'.'.$images->getClientOriginalExtension();
            $images->move('Backend/uploads/slider',$new_image);
            $slider->slider_image = $new_image;
        }
           $slider->save();
           
          return redirect()->to('/admin/slider');

        }

        public function delete($id){

            $slider = Slider::find($id);
            $slider->delete();
            return redirect()->back();
        }

        public function edit($id){
            $slider = Slider::find($id);
            $data = [
                'slider' => $slider
            ];
            return view('Backend.slider.edit_slider',$data);
        }

        public function update(Request $request, $id, ValidateUpdate $validate){
            $data = $request->all();
            $slider = new Slider();
            $slider = Slider::find($id);
            $slider->slider_name = $data['slider_name'];
            $slider->slider_status = '1';

            $images = $request->file('slider_image');   

            if($images){
                
                $images_old = $slider->slider_image;

                $path = 'Backend/uploads/slider/'.$images_old; 
                unlink($path);

                
                $name = $images->getClientOriginalName();// lấy tên ảnh
                $name_image      = current(explode('.',$name));
                $new_image       = $name_image.rand(0,99).'.'.$images->getClientOriginalExtension();
                $images->move('Backend/uploads/slider',$new_image);
                $slider->slider_image = $new_image;
            }
               $slider->update();
               
              return redirect()->to('/admin/slider');
        }

       
}

