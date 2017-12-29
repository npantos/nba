<?php

namespace App\Mail;

use App\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $comment;

	/**
	 * CommentReceived constructor.
	 * @param Comment $comment
	 */
    public function __construct(Comment $comment)
    {
		$this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	$comment = $this->comment;
        return $this->view('mails.comment-received',compact('comment'));
    }
}
