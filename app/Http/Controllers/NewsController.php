<?php

namespace App\Http\Controllers;

use App\News;
use App\Team;
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
	protected function showTeams($id){

		$team = Team::find($id);
		$news = $team->news()->paginate(6);

		return view('news.index',compact("news"));

	}
}
