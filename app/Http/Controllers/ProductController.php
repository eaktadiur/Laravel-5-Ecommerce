<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use auth;
use Input;
use App\Image;

class ProductController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$brands = new Brand();
		$brands = Brand::all();
		$category = new Category();
		$categorys = Category::all();
		$products= new Product();
		$products = Product::all();
		return view('product.products',['categorys'=>$categorys,'brands'=>$brands,'products'=> $products]);
	}

	public function productList()
	{
		$products = new Product();
		$products = Product::all();
		return view('product.index',['products'=>$products]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$brands = new Brand();
		$brands = Brand::all();
		$categorys = new Category();
		$categorys = Category::all();
		return view('product.createProduct',['categorys'=>$categorys ,'brands'=>$brands]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$products = new Product();
	    $name = Input::get('name');
		$products->name =$name;
		$products->price = Input::get('price');
		$products->catagories_id = Input::get('category');
	    $picture = Input::file('picture');
	    if($picture)
	    {
	        $destinationPath = 'upload/';
	        $extension = $picture->getClientOriginalExtension();
	        $randomNumber = str_random(10);
	    	
	    	$filename1 = $name.'_'.$randomNumber.'.'.$extension;
	    	$filename2 = str_replace(' ', '_', $filename1);
	    	
	    	$upload_success = Input::file('picture')->move($destinationPath,$filename2);
	    }
	    $products->picture = $destinationPath.$filename2;
		$products->qty = Input::get('qty');
		$products->condition = Input::get('condition');
		$products->brand_id = Input::get('brand');
		$products->save();
		return redirect()->route('product-list');
		}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function productDetail($id)
	{
		
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
