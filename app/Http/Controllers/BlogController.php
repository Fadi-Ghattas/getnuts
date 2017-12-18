<?php

namespace App\Http\Controllers;

use App\Helpers;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{

	public function getBlogPosts(Request $request)
	{
		if ($request->Ajax() && $request->isMethod('post')) {
			$response = [];
			if (!empty($request->input('category'))) {
				$category = Category::where('slug', '=', $request->input('category'))->firstOrFail();
				$posts = Post::where('category_id', '=', $category->id)
					->limit($request->input('postPrePage'))
					->offset(($request->input('page') - 1) * $request->input('postPrePage'))
					->orderby('created_at', 'desc')
					->get();
			} else {
				$posts = Post::limit($request->input('postPrePage'))
					->offset(($request->input('page') - 1) * $request->input('postPrePage'))
					->orderby('created_at', 'desc')
					->get();
			}

			$response['posts'] = \App\Post::toJsJson($posts);
			return response()->json($response);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int                      $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
