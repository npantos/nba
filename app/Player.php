<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $guarded = ['id'];

	public static function getAllPlayers(){
		return self::orderBy('created_at', 'DESC')->get();
	}

	public static function getSinglePlayer($id){
		return self::find($id);
	}

	public function team(){
		return $this->belongsTo(Team::class);

	}
}
