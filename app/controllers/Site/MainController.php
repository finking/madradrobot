<?php

namespace App\Controllers\Site;


use App\Controllers\BaseController;
use View;

class MainController extends BaseController
{

	public function index()
	{
		return View::make('index');
	}

}