<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Notefication;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public function index()
    {
        $i=1;
      $tag=Category::latest()->paginate(10);
      return view('category.index',compact(['tag','i']));
    }
    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'url_image'=>'required|image'
        ]);
        $newNameImage='';
        if ($request->hasFile("url_image")) {
            $name = $request->file('url_image')->getClientOriginalName();
            $newNameImage =time() . '_' . $name;
            // $request->file('url_image')->move(public_path() .'\assets\images\Category', $newNameImage);
            $path =public_path('/);
            $request->file('url_image')->move($path, $newNameImage);
        }
        Category::create([
            'name'=>$request->get('name'),
            'url_image'=>$path.$newNameImage,
            'name_image'=>$newNameImage,
        ]);

        $users=User::all(); // push notifacation from all users /////
        foreach($users  as $user ){
         Notefication::create([
            'body'=>'تم اضافه '.$request->get('name'),
            'title'=>"تحديث جديد ",
            'user_id'=> $user->getAttribute('id')
        ]);
        }//////////////////////////////////////////////////////////

        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        $i=1;
        $products=Product::where('category_id',$category->getAttribute('id'))->paginate(10);
        return view('category.showProducts',compact(['products','i']));
    }


    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=>'required'
        ]);
        if ($request->hasFile("url_image")){

            File::delete($category->getAttribute('url_image'));
            $name = $request->file('url_image')->getClientOriginalName();
            $newNameImage =time() . '_' . $name;
            $request->file('url_image')->move(public_path() .'\assets\images\Category', $newNameImage);
            $category->update([
                'name'=>$request->get('name'),
                'url_image'=>public_path() ."\assets\images\Category\\".$newNameImage,
                'name_image'=>$newNameImage,
            ]);
        }
    else{
        $category->update([
            'name'=>$request->get('name'),
          ]);
      }

        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
       File::delete($category->getAttribute('url_image'));
       $category->delete();
       return redirect()->route('category.index');    }
}
