<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class TestController extends Controller
{

	public function index()
	{
		dd('This is New Index of TestController');

	}

	public function create()
	{
		dd('This is Create');
	}

	public function newSuchayFunction($value='')
	{
		dd('This is DD');
	}

}
	
