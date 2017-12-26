<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class PlayersController extends Controller
{
	protected function index(){
		$players = Player::getAllPlayers();
		return view('players.index',compact("players"));
	}

	protected function show($id){
		$players = Player::getSinglePlayer($id);

		return view('players.show',compact("players"));
	}
}
