@extends('layouts.pencari')

@section('content')

    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/homepict.jpg');" data-stellar-background-ratio="0.8">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text text-center">
	            <h1 class="mb-4">Cara Mudah <br>Temukan Pelatih</h1>
              <p style="font-size: 18px;">Tersedia lebih dari 100 pelatih professional. Ayo, temukan pelatih yang kompeten di bidangnya dan booking sekarang!</p>
	            <form action="#" class="search-location mt-md-5">
		        		<div class="row justify-content-center">
		        			<div class="col-lg-10 align-items-end">
		        				<!-- <div class="form-group">
		          				<div class="form-field">
				                <input type="text" class="form-control" placeholder="Cari nama olahraga">
				                <button><span class="ion-ios-search"></span></button>
				              </div>
			              </div> -->
		        			</div>
		        		</div>
		        	</form>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </div>

    <section class="ftco-section goto-here">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Kategori Olahraga</h2>
          </div>
        </div>
        <div class="carousel slide" data-ride="carousel" id="multi_item">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm"><img class="d-block w-100" src="{{ asset('/images/olahraga/Sepak Bola.jpg') }}" alt="slide1"></div>
                <div class="col-sm"><img class="d-block w-100" src="{{ asset('/images/olahraga/Badminton.jpg') }}" alt="slide2"></div>
                <div class="col-sm"><img class="d-block w-100" src="{{ asset('/images/olahraga/Karate.jpg') }}" alt="slide3"></div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm"><img class="d-block w-100" src="{{ asset('/images/olahraga/Basket.jpg') }}" alt="slide4"></div>
                <div class="col-sm"><img class="d-block w-100" src="{{ asset('/images/olahraga/Renang.jpg') }}" alt="slide5"></div>
                <div class="col-sm"><img class="d-block w-100" src="{{ asset('/images/olahraga/Tennis.jpg') }}" alt="slide6"></div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#multi_item" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#multi_item" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <script>
    $('.carousel').carousel({
      interval: 4000
    })
    </script>

    <section class="ftco-section ftco-degree-bg services-section img mx-md-5" style="background-image: url(images/bg_2.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-start mb-5">
          <div class="col-md-6 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Work flow</span>
            <h2 class="mb-3">Cara Booking Pelatih</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="row">
		    			<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services services-2">
		              <div class="media-body py-md-4 text-center">
		              	<div class="icon mb-3 d-flex align-items-center justify-content-center"><span>01</span></div>
                    <h3>Pilih Pelatih</h3>
                    <p>Tentukan pelatih berdasarkan profile, harga, dan review</p>
		              </div>
		            </div>      
		          </div>
		          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services services-2">
		              <div class="media-body py-md-4 text-center">
		              	<div class="icon mb-3 d-flex align-items-center justify-content-center"><span>02</span></div>
                    <h3>Booking Pelatih</h3>
                    <p>Atur jadwal latihan sesuai dengan waktu yang tersedia</p>
		              </div>
		            </div>      
		          </div>
		          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services services-2">
		              <div class="media-body py-md-4 text-center">
		              	<div class="icon mb-3 d-flex align-items-center justify-content-center"><span>03</span></div>
		                <h3>Tunggu Konfirmasi</h3>
		                <p>Berikan waktu kepada pelatih untuk menerima atau menolak permintaan booking</p>
		              </div>
		            </div>      
		          </div>
		          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services services-2">
		              <div class="media-body py-md-4 text-center">
		              	<div class="icon mb-3 d-flex align-items-center justify-content-center"><span>04</span></div>
		                <h3>Latihan Sesuai Jadwal</h3>
		                <p>Apabila permintaan diterima, segera hubungi pelatih untuk memulai latihan</p>
		              </div>
		            </div>      
		          </div>
		        </div>
		      </div>
    		</div>
    	</div>
    </section>

    <!-- <section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/woman-jumping-with-ball-2825819.jpg);">
					</div>
					<div class="col-md-6 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section p-md-5">
	            <h2 class="mb-4">We Put People First.</h2>

	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
	          </div>
					</div>
				</div>
			</div>
		</section> -->

		<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="5">0</strong>
                <span>Kategori <br>Olahraga</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="164">0</strong>
                <span>Total <br>Pelatih</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="324">0</strong>
                <span>Total <br>Booking</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="303">0</strong>
                <span>Happy <br>Clients</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

     <section class="ftco-section ftco-agent">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Pelatih</span>
            <h2 class="mb-4">Terpopuler Bulan Ini</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
            <div class="property-wrap ftco-animate agent">
              <div class="img">
		    				<img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
        			<div class="text">
                <h3><a href="properties-single.html">Bambang Pamungkas</a></h3>
                <p class="price"><span class="orig-price">Rp50.000<small>/jam</small></span></p>
        				<a href="properties-single.html" class="d-flex align-items-center justify-content-center btn-custom">
        					<span class="ion-ios-eye"></span>
        				</a>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
            <div class="property-wrap ftco-animate agent">
              <div class="img">
		    				<img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
        			<div class="text">
        				<h3><a href="properties-single.html">James Stallon</a></h3>
                <p class="price"><span class="orig-price">Rp45.000<small>/jam</small></span></p>
        				<a href="properties-single.html" class="d-flex align-items-center justify-content-center btn-custom">
        					<span class="ion-ios-eye"></span>
        				</a>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
            <div class="property-wrap ftco-animate agent">
              <div class="img">
		    				<img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
        			<div class="text">
                <h3><a href="properties-single.html">Siti Julaeha</a></h3>
                <p class="price"><span class="orig-price">Rp40.000<small>/jam</small></span></p>
        				<a href="properties-single.html" class="d-flex align-items-center justify-content-center btn-custom">
        					<span class="ion-ios-eye"></span>
        				</a>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
            <div class="property-wrap ftco-animate agent">
              <div class="img">
		    				<img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
        			<div class="text">
                <h3><a href="properties-single.html">Titania</a></h3>
                <p class="price"><span class="orig-price">Rp50.000<small>/jam</small></span></p>
        				<a href="properties-single.html" class="d-flex align-items-center justify-content-center btn-custom">
        					<span class="ion-ios-eye"></span>
        				</a>
        			</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
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

@endsection