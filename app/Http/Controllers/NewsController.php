<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class NewsController extends Controller
{
    public function listNews(){
    	$news = DB::select('select * from news');
    	return view('index', ['news' => $news]);
    }
}
