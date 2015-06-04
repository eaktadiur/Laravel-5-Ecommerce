<?php   
namespace App;
use App\Category; 
?>
<h2>Category</h2>
<div class="panel-group category-products" id="accordian"><!--category-productsr-->

 @foreach($categorys as $category)
 <div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      @if(($category->under_category_id) == 0)
      <a data-toggle="collapse" data-parent="#accordian" href="#{{$category->id}}">
        <span class="badge pull-right"><i class="fa fa-plus"></i>
        </span>
        {{$category->name}}
        @endif
      </a>
    </h4>
  </div>

  <?php $subcategorys = Category::subcategory($category->id);
  foreach ($subcategorys as $subcategory) { 
    ?>
    <div id="{{$subcategory->under_category_id}}" class="panel-collapse collapse">
      <div class="panel-body">
        <ul>
          <li><a href="#"> {{$subcategory->name}}</a></li>
        </ul>
      </div>
    </div>
    <?php
  } 
  ?>
</div>

@endforeach

</div><!--/category-products-->

<div class="brands_products"><!--brands_products-->
  <h2>Brands</h2>
  <div class="brands-name">
    <ul class="nav nav-pills nav-stacked">
      @foreach($brands as $brand)
      <li><a href="#"> <span class="pull-right">(50)</span>{{$brand->name}}</a></li>
      @endforeach
      <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
    </ul>
  </div>
        </div><!--/brands_products-->