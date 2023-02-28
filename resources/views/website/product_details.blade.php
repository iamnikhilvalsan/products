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

<div class="container">
	<div class="card">
		<div class="container-fliud">
			<div class="wrapper row">
				<div class="preview col-md-6">
					<div class="preview-pic tab-content">
						@php
					    $DT->image = asset('uploads/products/'.$DT->image);
					    @endphp
						<div class="tab-pane active" id="pic-1"><img src="{{asset($DT->image)}}" /></div>
						<div class="tab-pane" id="pic-2"><img src="{{asset($DT->image)}}" /></div>
						<div class="tab-pane" id="pic-3"><img src="{{asset($DT->image)}}" /></div>
						<div class="tab-pane" id="pic-4"><img src="{{asset($DT->image)}}" /></div>
						<div class="tab-pane" id="pic-5"><img src="{{asset($DT->image)}}" /></div>
					</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset($DT->image)}}" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="{{asset($DT->image)}}" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="{{asset($DT->image)}}" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="{{asset($DT->image)}}" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="{{asset($DT->image)}}" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$DT->products}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p class="product-description" style="color: black !important;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						<h4 class="price">price: <span>$ {{$DT->price}}</span></h4>
						<p class="vote"></p>
						@foreach($Array as $DT2)
						<h5 class="sizes">{{$DT2['category']}}:
							@foreach($DT2['addons'] as $DT3)
								<span class="size" style="border: 1px solid;padding: 5px;">{{$DT3->addons}}</span>
							@endforeach
						</h5>
						@endforeach
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


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