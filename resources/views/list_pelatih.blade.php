@extends('layouts.pencari')

@section('content')

        <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{route('welcome')}}" class="nav-link">Home</a></li>
	          <!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li> -->
	          <li class="nav-item active"><a href="list_pelatih" class="nav-link">Agent</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="properties.html" class="nav-link">Properties</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap ftco-degree-bg js-fullheight" style="background-image: url('images/coach_2.jpg');" data-stellar-background-ratio="0.8">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Agent <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Agent</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-agent">
    	<div class="container">
        <div class="row">
        	<div class="col-md-3">
				<div class="property-wrap ftco-animate">
					<div class="agent">
						<div class="img">
							<img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text">
							<p class="price"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
							<h3><a href="properties-single.html">James Stallon</a></h3>
							<span class="location">Oakland</span>
							<a href="properties-single.html" class="d-flex align-items-center justify-content-center btn-custom">
								<span class="ion-ios-link"></span>
							</a>
						</div>
					</div>
        		</div>
        	</div>
        	<div class="col-md-3">
				<div class="property-wrap ftco-animate">
					<div class="agent">
						<div class="img">
							<img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text">
							<p class="price"><span class="old-price">800,000</span><span class="orig-price">$3,050<small>/mo</small></span></p>
							<h3><a href="properties-single.html">James Stallon</a></h3>
							<span class="location">Oakland</span>
							<a href="properties-single.html" class="d-flex align-items-center justify-content-center btn-custom">
								<span class="ion-ios-link"></span>
							</a>
						</div>
					</div>
        		</div>
        	</div>
        	<div class="col-md-3">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">James Stallon</a></h3>
								<p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">James Stallon</a></h3>
								<p class="h-info"><span class="position">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
	    				</div>
    				</div>
        	</div>

        	<div class="col-md-3">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-5.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">James Stallon</a></h3>
								<p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-6.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">James Stallon</a></h3>
								<p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-7.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">James Stallon</a></h3>
								<p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-8.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">James Stallon</a></h3>
								<p class="h-info"><span class="position">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        </div>
    	</div>
    </section>

@endsection