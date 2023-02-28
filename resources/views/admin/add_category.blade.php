@extends('admin.master')
@section('body')

<h1>
@if(Route::current()->getName() === 'add-category')
	Add Addon Category
@else
	Edit Addon Category
@endif
</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">
		@if(Route::current()->getName() === 'add-category')
			Add Addon Category
		@else
			Edit Addon Category
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
	<form action="{{route('add-category-save')}}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
		<div class="col-md-4">
			<div class="form-group">
				<label>Addon Category <span class="required">*</span></label>
				<input type="text" class="form-control" name="category" id="category" placeholder="Addon Category" required value="{{$category?$category->category:''}}">
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<input type="hidden" id='category_id' name="category_id" value="{{$category?$category->category_id:''}}"/>
				<input type="submit" class="btn btn-primary" name="filter" value="Save Details" style="margin-top: 25px;">
				<input type="reset" class="btn btn-primary" name="reset" value="Reset" style="margin-top: 25px;margin-left: 10px;">
			</div>
		</div>
	</form>
</div>

@endsection