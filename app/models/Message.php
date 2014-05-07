<?php

namespace App\Models;

use Eloquent;

class Message extends Eloquent {

	protected $fillable = array('name_message', 'body_message');
	protected $table = 'messages';

}