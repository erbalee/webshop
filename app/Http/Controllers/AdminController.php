<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.adminindex');
    }

    public function news(){
    	$news = DB::select('select * from news');
    	return view('admin.news', ['news' => $news]);
    }
}
