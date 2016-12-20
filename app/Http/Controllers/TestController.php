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
		dd('This is Suchay DD');
	}

	public function newPiyushFunction($value='')
	{
		
		dd('This is Piyush DD');
	}

	
	public function someMethodInNewAdded()
	{
		dd('This is MethodInNewAdded');
	}

}


	

