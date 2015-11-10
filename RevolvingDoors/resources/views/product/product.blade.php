@extends('template.master')
@section('content')
<div class="container white ">  
    <div class="col-xs-12 text-center"><h2>Our Products</h2></div>
    <div class="container-fluid">
	    <div class="col-xs-4 container"> 
	    	<div class="jumbotron productJumbo text-center">
		    	<span class="glyphicon glyphicon-hand-right"></span>
		        <h3>Manual Doors</h3>
		        <p class="text-left">International Revolving Doors will design and build you a high quality, customized manual door that will enhance your building's design and impress your customers.</p>
		    	<a class="btn btn-default btn-lg product-button" href="{{ URL::to('product/manual') }}"> Full Description </a>
			</div>
		</div>
		<div class="col-xs-4 container"> 
	    	<div class="jumbotron productJumbo text-center">
		    	<span class="glyphicon glyphicon-refresh "></span>
		        <h3>Automatic Doors</h3>
		        <p class="text-left">International Revolving Doors will make you a high quality, customized automatic door that will enhance your building's design and impress your customers.</p>
		    	<a class="btn btn-default btn-lg product-button" href="{{ URL::to('product/automatic') }}"> Full Description </a>
			</div>
		</div>
		<div class="col-xs-4 container"> 
	    	<div class="jumbotron productJumbo text-center">
		    	<span class="glyphicon glyphicon-lock "></span>
		        <h3>Security Doors</h3>
		        <p class="text-left">International Revolving Doors makes the most secure and technologically advanced Security Doors in the revolving door industry.  Our customers include government agencies, major industrial complexes, manufacturing facilities, financial centers, and other office locations requiring restricted access.</p>
		    	<a class="btn btn-default btn-lg product-button" href="{{ URL::to('product/security') }}"> Full Description </a>
			</div>
		</div>
	</div>
</div> <!-- end container -->
@endsection