<?php

namespace App\Http\Controllers;

use App\Mail\CommentReceived;
use App\Team;
use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{

	public function __construct() {

		$this->middleware('ForbiddenComment');

	}

	protected function comments(Request $request){

		$this->validate(request(),[
			'content' =>'required|min:10'
		]);

		$comment = Comment::create($request->all());
		$team = Team::find($request->input('team_id'));
		Mail::to($team->email)->send(new CommentReceived($comment));
		return redirect(route('teams',['id'=>request('team_id')]));
	}

	protected function forbidden(){
		return view('teams.forbidden-comment');
	}
}
