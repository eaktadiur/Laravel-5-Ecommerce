<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = "category";

	 public static function subcategory($id)
	{
		$subcategory = parent::where('under_category_id','=',$id)->get();
		return $subcategory;
	}


}
