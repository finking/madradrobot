<?php

namespace App\Controllers\Site;


use App\Controllers\BaseController;
use App\Models\Message;
use Input;

use Redirect;
use Validator;
use View;

class MainController extends BaseController
{

	public function index()
	{
		return View::make('index');
	}

	public function former()
	{
		return View::make('former');
	}

	public function action()
	{
		$rules = array(
			'name_message'     => 'required',
			'body_message'       => 'required|max:200',
		);
		$messagesForErrors=array(
			'required'   => 'Поле :attribute должно быть заполнено.',
			'max'        => 'Превышен лимит знаков в тексте сообщения (не более :max символов).',
		);

		$data = Input::all();
		$validator = Validator::make($data, $rules, $messagesForErrors);
		$userMessage = $validator->messages()->first();
		$title = 'Ошибка';

		if ($userMessage != null) {
			return Redirect::to('former')
				->with('userMessage', $userMessage)
				->with('userMessageTitle', $title)
				->withInput(Input::all());
		}


		$message = new Message;

		$message->name_message = Input::get('name_message');
		$message->body_message = Input::get('body_message');
		$message->save();
		return Redirect::to('view');
	}

	public function view()
	{

		$messages = Message::orderBy('created_at', 'desc')->take(3)->get();

		foreach ($messages as $message) {
			$arr[]=array(
			'name_message'=> $message->name_message,
			'body_message'=> $message->body_message,
			);
		}

		return View::make('view', array('message1' => $arr[0], 'message2'=>$arr[1], 'message3'=>$arr[2]));
	}


}