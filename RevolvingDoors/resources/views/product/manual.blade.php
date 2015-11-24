@extends('template.master')
@section('content')
<div class="container white">
 
<h1 class="text-center">Manual Revolving Doors</h1>    
<div class="col-xs-7">    
<!-- Beginning of Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="{{URL::to('images/door.jpg')}}" width="460" height="345">
        <div class="carousel-caption">
          <h3>Door One</h3>
          <p>This is a first door.</p>
        </div>
      </div>

      <div class="item">
        <img src="{{URL::to('images/door.jpg')}}" width="460" height="345">
        <div class="carousel-caption">
          <h3>Door Two</h3>
          <p>This is a second door.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="{{URL::to('images/door.jpg')}}" width="460" height="345">
        <div class="carousel-caption">
          <h3>Door Three</h3>
          <p>This is a third door.</p>
        </div>
      </div>

      <div class="item">
        <img src="{{URL::to('images/door.jpg')}}" width="460" height="345">
        <div class="carousel-caption">
          <h3>Door Four</h3>
          <p>This is a fourth door.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> <!-- End of Carousel -->
</div>
    <div class="col-xs-5">
        <br>
        <p><span class="lead" >Every IRD Revolving door is equipped with the most effective manual speed controls on the market today.</span> The device limits the turning speed to approximately 12 rpm, which allows a sufficient flow of people while restricting the ability to free spin the door as well as protecting against impatient pushers. </p>
        <h3>Contact your local rep to configure the perfect door for your building project</h3>
        <p class="text-center"><a class="btn btn-success" href="#" role="button"><span class="glyphicon glyphicon-chevron-right"></span>Find my Rep</a></p>
    </div>
    <!--<div class="col-xs-6 col-xs-offset-3">
        <span class="text-center"><img class="img-responsive img-thumbnail" width="100%" src="{{ URL::to('images/products/manual.jpg')}}" ></span>
    </div>-->
    <div class="col-xs-8 col-xs-offset-2">
        <br>
        <blockquote>Revolving doors allow people to move in and out of your building while maintaining the architectural structure and style. By reducing the time that doors are open, they will limit outside noises inside the building and lower heating a cooling costs.</blockquote>
    </div>

    
</div> <!-- end of Container -->
@endsection