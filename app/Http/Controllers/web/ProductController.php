<?php
namespace App\Http\Controllers\web;

use App\Models\Notefication;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{


    public function index()
    {
        //
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
    public function show( $id)
    {
        $product= Product ::where('id',$id)->with (['imags','category','user','city'])->get();

        return view('product.show',compact('product'));
        // return $product;
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




    public function indexProductUnAccept(){
        $products=Product::where('accept',0)->with('user')->latest()->paginate(10);
        return view('product.product_un_accept.productUnAccept',compact('products'));
    }
    public function indexProductAccepted(){
        $products=Product::where('accept',1)->with(['user','category'])->latest()->paginate(10);
        return view('product.product_accept.productAccept',compact('products'));
    }

    public function accept(Product $id){
        DB::table('products')->where('id',$id->getAttribute('id'))->update(['accept'=>1]);
        Notefication::create(
            ['title'=> '   تم الموافقه على '.$id->getAttribute('name'),
            'user_id'=>$id->getAttribute('user_id'),
            'body'=>'يمكن للاخرين رويه منتجك الان شكرا لاستخدامك تطبيقنا'
            ]
        );
        return redirect()->route('unAccept');
    }
}
