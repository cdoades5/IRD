@extends('template.master')
@section('content')

 

<div class="container white ">  

    <div class="col-xs-12 text-center">
        <h2>Representatives <br><small>Representatives in {{ $location->state }}</small></h2>
        <a class="btn btn-default" href="{{URL::to('reps')}}    ">Back</a>
        <hr />
    </div>
    @foreach ($reps as $rep)
    <?php $names = explode(" ", $rep->name); ?>
    <div class="col-xs-10 col-md-offset-1 rep-profile">
    	<div class="col-md-3">
    		<img src="{{ URL::to('uploads/reps/' . $rep->avatar) }}" class="img-circle" />
    	</div>
    	<div class="col-md-9">
    		<h2 class="repname">
	    		{{ $rep->name }}
	    	</h2>	
	        <p>
	        	<?php
	        		$code = substr($rep->phone_number, 0, 3);
	        		$firstpart = substr($rep->phone_number, 3, 3);
	        		$secondpart = substr($rep->phone_number, 6, 4);
	        	?>
	            <strong>Phone:</strong>   <span class="repphone">({{ $code }}) - {{ $firstpart }} - {{ $secondpart }}</span>
			</p>
			<p class="repdesc">
				<strong>About  {{ $names[0] }}: </strong> {{ $rep->description }}
	        </p>
    	</div>
    </div>
    @endforeach
    
    

    <!--
	<div class="col-md-12 text-center"><h2>Representatives</h2></div>
	<div class="form-group text-center row">
	<label for="sel1">Select location:</label>
		<select class="form-control col-md-4" id="sel1">
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>
	</div>
	-->

</div> <!-- end container -->
@endsection