<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{

    public function index()
    {
        $images =Slider::all();
        return view('slider.index',compact('images'));
    }

    public function create()
    {
        return view('slider.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'url_image'=>'required|image'
        ]);
        $newNameImage='';
        if ($request->hasFile("url_image")) {
            $name = $request->file('url_image')->getClientOriginalName();
            $newNameImage =time() . '_' . $name;
            $request->file('url_image')->move(public_path() .'\assets\images\slider', $newNameImage);
        }
        $slider =new Slider;
        $slider ->title = $request ->get('title');
        $slider->description=$request ->get('description');
        $slider->image_name=$newNameImage;
        $slider ->save();
        return redirect()->route('slider.index');
    }

    public function show(Slider $slider)
    {
        return view('slider.show',compact('slider'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        if ($request->hasFile("url_image")){
            File::delete(public_path().'/assets/images/slider/'.$slider->getAttribute('image_name'));            $name = $request->file('url_image')->getClientOriginalName();
            $newNameImage =time() . '_' . $name;
            $request->file('url_image')->move(public_path() .'\assets\images\slider', $newNameImage);
            // $slider->update([
            //     'title'=>$request->get('title'),
            //     'name_image'=>$newNameImage,
            //     'description' => $request->get('description')
            // ]);
           Slider::find($slider->getAttribute('id'))->delete();
            $slider =new Slider;
            $slider ->title = $request ->get('title');
            $slider->description=$request ->get('description');
            $slider->image_name=$newNameImage;
            $slider ->save();
        }
    else{
        $slider->update([
            'title'=>$request->get('title'),
            'description' => $request->get('description')
          ]);
      }
      return redirect()->route ('slider.index');
    }


    public function destroy(Slider $slider)
    {
        File::delete(public_path().'/assets/images/slider/'.$slider->getAttribute('image_name'));
        Slider::find($slider ->id)->delete();
       return redirect()->route('slider.index');
    }
}
