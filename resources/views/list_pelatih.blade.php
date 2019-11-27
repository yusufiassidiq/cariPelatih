@extends('layouts.pencari')

@section('content')

        

    <section class="hero-wrap ftco-degree-bg js-fullheight" style="background-image: url('images/listpelatihpict.jpg');" data-stellar-background-ratio="0.8">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pelatih <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Pelatih</h1>
          </div>
        </div>
      </div>
    </section>
	
		<br>
		<br>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
          <div class="s010">
            <form method="POST" action="{{ route('filterPelatih') }}" enctype="multipart/form-data">
            @csrf
              <div class="inner-form">
                <div class="advance-search">
                  <span class="desc">FILTER SEARCH</span>
                  <div class="row">
                    <div class="input-field">
                      <div class="input-select">
                        <select data-trigger="" name="kategoriOlahraga" required>
                          <option placeholder="" value="">Kategori Olahraga</option>
                          <option value="all">All</option>
                          @foreach($kategoriOlahragas as $kategoriOlahraga)
                          <option value="{{ $kategoriOlahraga->id }}">{{ $kategoriOlahraga->namaOlahraga }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="input-field">
                      <div class="input-select">
                        <select data-trigger="" name="tarif" required>
                          <option placeholder="" value="">Urutkan Tarif</option>
                          <option value="asc">Terkecil</option>
                          <option value="desc">Terbesar</option>
                        </select>
                      </div>
                    </div>
                    <div class="input-field">
                      <div class="input-select">
                      </div>
                    </div>
                  </div>
                  <div class="row third">
                    <div class="input-field">
                      <div class="result-count">
                        <span>108 </span>results</div>
                      <div class="group-btn">
                        <button class="btn-delete" id="delete">RESET</button>
                        <button class="btn-search" type="submit">SEARCH</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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
						<div class="img" style="height:200px; max-height:200px">
							<img src="{{url('pelatihfile/profpic/'.$pelatih->profpic)}}" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text">
							<p class="price"><span class="orig-price">Rp.{{$pelatih->tarif}}<small>/jam</small></span></p>
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