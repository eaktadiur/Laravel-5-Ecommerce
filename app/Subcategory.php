<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model {

	proctected $table = DB::table('category')->where('under_category_id','>','0');

}
