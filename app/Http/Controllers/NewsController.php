<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

	protected function index(){
		$news = News::getAllNews();
		return view('news.index',compact("news"));
	}

	protected function show($id){
		$news = News::getSingleNews($id);

		return view('news.show',compact("news"));
	}
}
