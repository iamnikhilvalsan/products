@extends('admin.master')
@section('body')

<h1>View Addons</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">View Addons</li>
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
	@include('admin.flash-message')
	<div class="col-md-12 filter-div"></div>
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-bordered table-hover dataTable">
				<thead>
					<tr>
						<th class="w-50">#</th>
						<th>Category</th>
						<th>Addons</th>
						<th class="text-center" colspan="2">Actions</th>
					</tr>
				</thead>
				<tbody>
					@php $i = 0; @endphp
					@foreach($addons as $DT)
						@php $i++; @endphp
						<tr>
							<td>{{ $i; }}</td>
							<td>{{ $DT->category; }}</td>
							<td>{{ $DT->addons; }}</td>
							<td class="text-center w-29">
								<a href="{{route('edit-addons',$DT->addons_id)}}" onclick="" title="Edit Addons"><i class="fa fa-pencil-square"></i></a>
							</td>
							<td class="text-center w-29">
								<a href="#" onclick="deletedata({{ $DT->addons_id; }})" title="Delete Addons" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></a>
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
				<h4 class="modal-title">Delete Addons</h4>
			</div>
			<div class="modal-body">
				<p>Do You Want To Delete Selected Addons?</p>
			</div>
			<div class="modal-footer">
				<form action="{{route('delete-addons')}}" method="post">
        			@csrf
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
					<input type="hidden" name="delete_id" id="delete_id">
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
function deletedata(delete_id)
{
	$('#delete_id').val(delete_id);	
}
</script>
@endpush