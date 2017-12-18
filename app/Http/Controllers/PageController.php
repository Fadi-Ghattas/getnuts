<?php

namespace App\Http\Controllers;


use App\Mix;
use App\Product;
use App\ProductCategory;
use App\Helpers;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class PageController extends Controller
{

	public function home()
	{
		$bodyClass = 'home';
		$PageTitle = 'Home';
		$products = Product::all();
		$productCategories = ProductCategory::all();
		$productsJson = Product::toJsJson($products);
		$mixes = Mix::all();

		return view('home', compact('bodyClass', 'mixes',  'products', 'productCategories', 'productsJson', 'PageTitle'));
	}

	public function about()
	{
		$bodyClass = 'about';
		$PageTitle = 'About';
		return view('about', compact('bodyClass', 'PageTitle'));
	}

	public function products()
	{
		$bodyClass = 'products';
		$PageTitle = 'Products';
		$products = Product::all();
		$productCategories = ProductCategory::all();
		$productsJson = Product::toJsJson($products);

		return view('products', compact('bodyClass', 'products', 'productCategories', 'productsJson', 'PageTitle'));
	}

	public function contact()
	{
		$bodyClass = 'contact-us';
		$PageTitle = 'Contact Us';
		return view('contact', compact('bodyClass', 'PageTitle'));
	}

	public function mixes()
	{
		$bodyClass = 'our-mixes';
		$PageTitle = 'Our Mixes';
		$mixes = Mix::all();
		return view('mixes', compact('bodyClass', 'PageTitle', 'mixes'));
	}

	public function blog()
	{
		$bodyClass = 'blog';
		$PageTitle = 'Blog';

		$postPearPage = 3;
		$posts = Post::limit($postPearPage)->offset(0)->orderby('created_at', 'desc')->get();
		$postsCount = Post::all()->count();
		$postsPagination =  ceil ($postsCount / $postPearPage);
		$postsCategories = Category::all()->toArray();
		return view('blog', compact('bodyClass', 'PageTitle', 'posts', 'postPearPage', 'postsPagination', 'postsCategories'));
	}

	public function giftBox()
	{
		$bodyClass = 'gift-box';
		$PageTitle = 'Gift Box';
		return view('gift-box', compact('bodyClass', 'PageTitle'));
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
