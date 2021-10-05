<?php

namespace App\Http\Controllers\api;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addLick(Request $request)
    {
        $product= Product::find($request->get('post_id'));
        $product->count_like=$request->get('count');
        $product->save();
        return response()->json(['result'=>'ok']);
    }
    public function index( )
    {

        // $products = Product::where('accept',1 && 'category_id',$request->get('category_id'))->with('imags')->latest()->paginate(10);
        // return response($products,200);
    }

public function productFromCategory (Request $request )
{
  $products = Product::where(['accept'=> 1,'category_id'=>$request->get('category_id')])->with(['imags','category','city','user','coin'])->latest()->paginate(10);
        return ProductResource::collection($products,200);
        return response($products,200);

}

    public function search (Request $request){
        $id =$request ->get('city_id');
        $body = $request ->get('body');
        $products =Product::where('city_id',$id)->with('imags')->get();
        $productArray = $products->toArray();
        $productsSearch = array();
        for ($i = 0; $i < array_push($productArray); $i++) {
            if (str_contains($products[$i]->getAttribute('name'),$body)){
                array_push($productsSearch, $products[$i]);
            }
        }
        return response($productsSearch ,200);
    }

    public function create()
    {


    }


    public function store(Request $request)
    {
        $request->validate([
            'coin_id'=>'required',
           'name'=>'required',
           'description'=>'required',
           'category_id'=>'required',
           'price'=>'required',
           'user_id' =>'required',
           'status_sell'=>'required',
           'city_id'=>'required',
        ]) ;
        $product = new Product();
        $product->location=$request->get('location');
        $product->coin_id=$request->get('coin_id');
        $product->name=$request->get('name');
        $product->description=$request->get('description');
        $product->category_id=$request->get('category_id');
        $product->price=$request->get('price');
        $product->address=$request->get('address');
        $product->user_id=$request->get('user_id');
        $product->status_sell=$request->get('status_sell');
        $product->city_id=$request->get('city_id');
        $product->save();

    //    $product= Product::create([
    //        'location'=>$request->get('location'),
    //        'name'=>$request->get('name'),
    //        'description'=>$request->get('description'),
    //        'category_id'=>$request->get('category_id'),
    //        'price'=>floatval($request->get('price')),
    //        'address'=>$request->get('address'),
    //        'user_id'=>intval($request->get('user_id')),
    //        'status_sell'=>intval($request->get('status_sell')),
    //        'city_id'=>intval($request->get('city_id')),
    //    ]);
       return $product;
     }


     public function stroImage(Request $request){
        $newNameImage='';
        if ($request->hasFile("file")!=null ) {
            $name = $request->file('file')->getClientOriginalName();
            $newNameImage =time() . '_' . $name;
            $request->file('file')->move(public_path('/assets/images/products'), $newNameImage);
            $imag =new Image;




            $imag->url_image=public_path('/assets/images/products').$newNameImage;
            $imag->product_id=intval($request->get('product_id'));


            $imag->image_name=$newNameImage;
            $imag->save();
            return response( $request->get('prouct_id'),200);
         }
 }

    public function show(  $id )
    {
        $products= Product::where('user_id',$id)->with(['imags','category','city','user'])->latest()->paginate(10);
        return ProductResource::collection( $products);
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Request $request  )
    {
        $deletProduct = Product:: findOrFail( $request->get('id'))->delete();
        $deletImage =Image::where('product_id','=',$request->get('id'))->delete();
        if ($deletProduct&& $deletImage) {
            $string=$request -> get('images_name');
            $names =explode('"',$string);
            foreach($names as $name){
                File::delete(public_path('/assets/images/products/').$name);
            }
            return response()->json(['mssage'=>'ok']);
        } else {
            return response()->json(['mssage'=>'error']);
        }

    }

}
