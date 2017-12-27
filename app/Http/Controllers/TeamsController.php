<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class TeamsController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

	protected function index(){
		$teams = Team::getAllTeams();
		return view('teams.index',compact("teams"));
	}

	protected function show($id){
		$teams = Team::getSingleTeam($id);

		return view('teams.show',compact("teams"));
	}
}
