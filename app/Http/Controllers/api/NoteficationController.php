<?php
namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
use App\Models\Notefication;
use Illuminate\Support\Facades\DB;

class NoteficationController extends Controller
{

    public function index(Request $request)
    {
      $notifi=  DB::table('notefications')->where('user_id',$request->get('id'))->latest()->paginate(15);
      return response($notifi,200);
     }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Notefication $notefication)
    {
        //
    }


    public function edit(Notefication $notefication)
    {
        //
    }


    public function update(Request $request, Notefication $notefication)
    {
        //
    }


    public function destroy( $notefication)
    {
        DB::table('notefications')->where('id',$notefication)->delete();
        return $notefication;
    }


}
