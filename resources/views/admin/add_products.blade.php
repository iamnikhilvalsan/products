@extends('admin.master')
@section('body')

<h1>
@if(Route::current()->getName() === 'add-products')
	Add Products
@else
	Edit Products
@endif
</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">
		@if(Route::current()->getName() === 'add-products')
			Add Products
		@else
			Edit Products
		@endif
	</li>
</ol>
</section>

<section class="content">
<div class="box">
<div class="box-header with-border">
	<div class="box-tools pull-right">
		<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
		<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
	</div>
</div>

<div class="box-body">
	<form action="{{route('add-products-save')}}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
		<div class="col-md-4">
			<div class="form-group">
				<label>Products Name <span class="required">*</span></label>
				<input type="text" class="form-control" name="products" id="products" placeholder="Products Name" required value="{{$products?$products->products:''}}">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Price <span class="required">*</span></label>
				<input type="number" class="form-control" name="price" id="price" placeholder="Price" required value="{{$products?$products->price:''}}">
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Image <span class="required">(500x500)</span></label>
				<input type="file" accept=".jpg,.webp,.png"  class="form-control" name="image">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="hidden" id='products_id' name="products_id" value="{{$products?$products->products_id:''}}"/>
				<input type="submit" class="btn btn-primary" name="filter" value="Save Details" style="margin-top: 25px;">
				<input type="reset" class="btn btn-primary" name="reset" value="Reset" style="margin-top: 25px;margin-left: 10px;">
			</div>
		</div>
	</form>
</div>

@endsection