<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class PagesController extends Controller
{


	public function showGroup($id){
		if (isset($id)) {
            $product = DB::select("SELECT * FROM product WHERE p_group='$id'");
            return view('groups', [
                'id' => $id,
                'products' =>$product,
            ]);       
        }

	}
    
    public function contact(){

    	return view('contact');

    }

    public function groups(){
    	$groups = DB::select('select * from groups');
    	return view('groups', ['groups' => $groups]);
    }
}
