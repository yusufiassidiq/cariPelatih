@extends('layouts.pencari')

@section('content')

        

    <section class="hero-wrap ftco-degree-bg js-fullheight" style="background-image: url('images/coach_2.jpg');" data-stellar-background-ratio="0.8">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Agent <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Agent</h1>
          </div>
        </div>
      </div>
    </section>
	
		
	
		<section class="ftco-section ftco-agent">
    	<div class="container">
        <div class="row">
		@foreach ($pelatihs as $pelatih)
        	<div class="col-md-3">
				<div class="property-wrap ftco-animate">
					<div class="agent">
						<div class="img">
							<img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text">
							<p class="price"><span class="orig-price">Rp.{{$pelatih->tarif}}<small>/mo</small></span></p>
							<h3><a href="properties-single.html">{{$pelatih->nama}}</a></h3>
							<span class="location">{{$pelatih->kategoriOlahraga[0]->namaOlahraga}}</span>
							<a href="properties-single.html" class="d-flex align-items-center justify-content-center btn-custom">
								<span class="ion-ios-link"></span>
							</a>
						</div>
					</div>
        		</div>
        	</div>
        @endforeach
        </div>
    	</div>
    </section>

@endsection