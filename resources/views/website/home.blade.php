@extends('website.master')
@section('body')

<section class="ftco-section ftco-no-pt bg-light">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12 heading-section text-center ftco-animate mb-5">
<span class="subheading"></span>
<h2 class="mb-2"></h2>
</div>
</div>
<div class="row">
</div>
</div>
</section>

<section class="ftco-section ftco-about">
<div class="container">
<div class="row no-gutters">
<div class="col-md-12 wrap-about ftco-animate">
<div class="heading-section heading-section-white pl-md-12">

<section style="background-color: #eee;">
<div class="container py-5">
<div class="row">
	@foreach($products as $DT)
	    @php
	    $DT->image = asset('uploads/products/'.$DT->image);
	    @endphp
		<div class="col-md-12 col-lg-4 mb-4">
			<div class="card text-black">
				<img src="{{asset($DT->image)}}" class="card-img-top" alt=""/>
				<div class="card-body">
					<div class="text-center mt-1">
						<h4 class="card-title">{{$DT->products}}</h4>
						<h6 class="text-primary mb-1 pb-3">$ {{$DT->price}}</h6>
					</div>
					<div class="d-flex flex-row">
						<a  href="{{ url('products-details',$DT->products_id) }}" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark"> View Details </a>
					</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
</div>
</section>


</div>
</div>
</div>
</div>
</section>
<footer>
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p>Copyright &copy; {{ date('Y') }} All rights reserved</p>
</div>
</div>
</div>
</footer>
@endsection