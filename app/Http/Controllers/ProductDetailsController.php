<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\product;
use App\Category;
use App\Brand;
use App\Review;
use DB;
class ProductDetailsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$product = new Product();
		$product = Product::find($id);
		$categorys = new Category();
		$categorys = Category::all();
		$brands = new Brand();
		$brands = Brand::all();
		$reviews = new Review();
		$reviews = $reviews = DB::table('review')->where('product_id','=',$id)->get();
		return view('productDetails.productDetails' ,['product'=> $product ,'categorys'=>$categorys,'brands'=>$brands,'reviews'=>$reviews]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function prductDetail()
	{
		return view('productDetails.productDetails');
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
