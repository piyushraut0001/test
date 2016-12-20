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

	public function someNewFunction($value='')
	{
		dd($value);
	}

	public function newSuchayFunction($value='')
	{
		dd('This is DD');
	}

	public function someMethodInNewAdded()
	{
		dd('This is MethodInNewAdded');
	}

}
	
