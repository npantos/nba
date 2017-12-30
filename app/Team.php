<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $guarded = ['id'];

	public static function getAllTeams(){
		return self::orderBy('created_at', 'DESC')->get();
	}

	public static function getSingleTeam($id){
		return self::find($id);
	}

	public function players(){
		return $this->hasMany(Player::class)->orderBy('created_at', 'DESC');
	}

	public function comments(){
		return $this->hasMany(Comment::class)->orderBy('created_at', 'DESC');
	}

	public function news()
	{
		return $this->belongsToMany(News::class,'news_teams');

	}
}
