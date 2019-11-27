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
	
		<br>
		<br>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="card">
						<!-- <div class="card-header">{{ __('Register Pelatih') }}</div> -->
                
                        	<div class="card-body">
                        	    <form method="POST" action="{{ route('filterPelatih') }}" enctype="multipart/form-data">
                        	        @csrf

									<div class="container-fluid">
										<div class="row">
										<label class="col-md-2 col-form-label text-md-center">Kategori Olahraga</label>
											<div class="col-md-2.5">
												<select name="kategoriOlahraga" id="" class="form-control center"> 
                                        			<option selected="selected" value="" hidden disabled selected >Pilih Kategori Olahraga</option> 
													<option value="all"> Semua </option>
                                        				@foreach ($kategoriOlahragas as $kategoriOlahraga)
															
                                            				<option value="{{ $kategoriOlahraga->id }}"> {{ $kategoriOlahraga->namaOlahraga}}</option>
                                        				@endforeach
                                    			</select>
											</div>
										<label class="col-md-2 col-form-label text-md-center">Harga</label>
											<div class="col-md-2">
												<select name="harga" id="" class="form-control center"> 
                                        			<option selected="selected" value="" disabled selected >Pilih Harga</option> 
                                        			<option value="">> Rp1.000.000</option>
													<option value="">> Rp500.000</option>
													<option value="">< Rp500.000</option>
                                    			</select>
											</div>
											<div class="col-md-2">
												<button type="submit" class="btn btn-sm btn-outline-info btn-block">
													Cari
												</button>
											</div>
										</div>
									</div>
								</form>
								
							</div>
						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>

		<section class="ftco-section ftco-agent">
    	<div class="container">
        <div class="row">
		@foreach ($pelatihs as $pelatih)
        	<div class="col-md-3">
				<div class="property-wrap ftco-animate">
					<div class="agent">
						<div class="img">
							<img src="{{url('pelatihfile/profpic/'.$pelatih->profpic)}}" class="img-fluid" alt="Colorlib Template">
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