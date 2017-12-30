<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	public $table ='news';

	protected $guarded = ['id'];

	public static function getAllNews(){
		return self::with('user')->orderBy('created_at', 'DESC')->paginate(6);
	}

	public static function getSingleNews($id){
		return self::find($id);
	}

	public function user(){
		return $this->belongsTo(User::class);

	}

	public function teams()
	{
		return $this->belongsToMany(Teams::class,'news_teams');
	}
}
