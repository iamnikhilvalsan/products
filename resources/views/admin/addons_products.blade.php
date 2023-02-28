@extends('admin.master')
@section('body')

<h1>Product Addons</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Product Addons</li>
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
	<form action="{{route('add-addons-products-save')}}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="col-md-4">
			<div class="form-group">
				<label>Addon Category <span class="required">*</span></label>
				<select class="form-control" name="category_id" id="category_id" required onchange="fetch_addons(this.value)">
					<option value="">Select Addon Category</option>
					@foreach($category as $DT)
					<option value="{{$DT->category_id}}">{{$DT->category}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Addons <span class="required">*</span></label>
				<select class="form-control" name="addons_id" id="addons_id" required>
					<option value="1">Select Addons</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<input type="hidden" id='products_id' name="products_id" value="{{$products?$products->products_id:''}}"/>
				<input type="hidden" id='products_addons_id' name="products_addons_id" value="{{$products?$products->products_addons_id:''}}"/>
				<input type="submit" class="btn btn-primary" name="filter" value="Save Details" style="margin-top: 25px;">
				<input type="reset" class="btn btn-primary" name="reset" value="Reset" style="margin-top: 25px;margin-left: 10px;">
			</div>
		</div>
	</form>
</div>


<div class="box-body">
	@include('admin.flash-message')
	<div class="col-md-12 filter-div"></div>
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-bordered table-hover dataTable">
				<thead>
					<tr>
						<th class="w-50">#</th>
						<th>Addons Category</th>
						<th>Addons</th>
						<th class="text-center" colspan=""></th>
					</tr>
				</thead>
				<tbody>
					@php $i = 0; @endphp
					@foreach($productsaddons as $DT)
						@php $i++; @endphp
						<tr>
							<td>{{ $i; }}</td>
							<td>{{ $DT->category; }}</td>
							<td>{{ $DT->addons; }}</td>
							<td class="text-center w-29">
								<a href="#" onclick="deletedata({{ $DT->products_addons_id; }})" title="Delete Addons" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="DeleteModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Delete Products</h4>
			</div>
			<div class="modal-body">
				<p>Do You Want To Delete Selected Products?</p>
			</div>
			<div class="modal-footer">
				<form action="{{route('delete-addons-products')}}" method="post">
        			@csrf
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
					<input type="hidden" name="delete_id" id="delete_id">
					<input type="hidden" name="products_id" value="{{$products?$products->products_id:''}}"/>
					<input type="submit" class="btn btn-danger" name="delete" value="Delete">
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END OF DELETE MODAL -->

@endsection

@push('scripts')
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function fetch_addons(category_id)
{
    $.ajax({
	    type: 'POST',
	    url: '/fetch-addons',
	    data: {
	        category_id: category_id
	    },
	    success: function(response) {
	    	if(response.success){
	    		data = response.data;
		        $('#addons_id').html('<option value="">Select Addons</option>');
		        for (let i = 0; i < data.length; i++) {
				    $('#addons_id').append('<option  value="'+ data[i].addons_id+'">'+data[i].addons+'</option>');
				}
		    } else {
		    	$('#addons_id').html('<option value="">Select Addons</option>');
		    }
		}
	});	
}
</script>
<script type="text/javascript">
function deletedata(delete_id)
{
	$('#delete_id').val(delete_id);	
}
</script>
@endpush