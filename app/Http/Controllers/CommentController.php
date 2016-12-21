<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CommentController extends Controller
{
	/**
	 * @return mixed
	 */
	public function index()
	{
		return Response::json(Comment::get());
	}
	

	/**
	 * @param Request $request
	 * @return mixed
	 */
	public function store(Request $request)
	{
		Comment::create([
				'author' => $request->get('author'),
				'text'   => $request->get('text'),
		]);

		return Response::json(['success' => true]);
	}


	/**
	 * @param $id
	 * @return mixed
	 */
	public function destroy($id)
	{
		Comment::destroy($id);

		return Response::json(array('success' => true));

	}
}
