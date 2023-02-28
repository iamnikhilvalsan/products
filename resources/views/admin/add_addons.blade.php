@extends('admin.master')
@section('body')

<h1>
@if(Route::current()->getName() === 'add-addons')
	Add Addons
@else
	Edit Addons
@endif
</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">
		@if(Route::current()->getName() === 'add-addons')
			Add Addons
		@else
			Edit Addons
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
	<form action="{{route('add-addons-save')}}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="col-md-4">
			<div class="form-group">
				<label>Addon Category <span class="required">*</span></label>
				<select class="form-control" name="category_id" id="category_id" required>
					<option value="">Select Addon Category</option>
					@foreach($category as $DT)
					<option value="{{$DT->category_id}}" @if($addons && $addons->category_id==$DT->category_id) {{'selected'}} @endif>{{$DT->category}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Addons <span class="required">*</span></label>
				<input type="text" class="form-control" name="addons" id="addons" placeholder="Addons" required value="{{$addons?$addons->addons:''}}">
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<input type="hidden" id='addons_id' name="addons_id" value="{{$addons?$addons->addons_id:''}}"/>
				<input type="submit" class="btn btn-primary" name="filter" value="Save Details" style="margin-top: 25px;">
				<input type="reset" class="btn btn-primary" name="reset" value="Reset" style="margin-top: 25px;margin-left: 10px;">
			</div>
		</div>
	</form>
</div>

@endsection