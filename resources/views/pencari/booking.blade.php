@extends('layouts.pencari')

@section('content')
  <section class="hero-wrap ftco-degree-bg js-fullheight" style="background-image: url('/images/listpelatihpict.jpg');" data-stellar-background-ratio="0.8">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <!-- <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Booking<i class="ion-ios-arrow-forward"></i></span></p> -->
          <h1 class="mb-3 bread">Booking</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section goto-here" style="width: 90%; margin: auto;">
    <!-- Main row -->
    <div class="row">
      <div class="col-12">
        <div class="card card-primary card-outline card-tabs">
          <div class="card-header p-0 pt-1 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-three-pending-tab" data-toggle="pill" href="#custom-tabs-three-pending" role="tab" aria-controls="custom-tabs-three-pending" aria-selected="true">Belum Dikonfirmasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-three-sukses-tab" data-toggle="pill" href="#custom-tabs-three-sukses" role="tab" aria-controls="custom-tabs-three-sukses" aria-selected="false">Sukses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-three-gagal-tab" data-toggle="pill" href="#custom-tabs-three-gagal" role="tab" aria-controls="custom-tabs-three-gagal" aria-selected="false">Gagal</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
              <div class="tab-pane fade show active" id="custom-tabs-three-pending" role="tabpanel" aria-labelledby="custom-tabs-three-pending-tab">
                <table id="tabelPending" class="table table-hover table-bordered">
                  <thead>
                                     
                    <tr>
                      <th>Pelatih</th>
                      <th>Tanggal</th>
                      <th style="width: 50px;">Durasi</th>
                      <!-- <th>Biaya</th> -->
                      <th>Total</th>
                      <th style="width: 30px;">Foto</th>
                      <th style="width: 90px;">Status</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                  @foreach($bookings as $booking) 
                    <tr>
                      <td>{{$booking->namaPelatih}}</td>
                      <td>{{$booking->tanggal}}</td>
                      <td>{{$booking->durasi}}</td>
                      <!-- <td>50000</td> -->
                      <td>{{$booking->biaya}}</td>
                      <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalUploadBukti"><i class="fas fa-eye"></i>Upload</button>
                      </td>
                      <td>Belum upload</td>

                      <div class="modal fade" id="modalUploadBukti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="card">
                            <div class="card-header">
                              <div class="row">
                                <div class="col-md-10">
                                  <h3>Upload Bukti Pembayaran</h3>
                                </div>
                                <div class="col-md-2">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                              </div> 
                            </div>
                            <div class="card-body mx-3">
                                <form method="POST" action="#">
                                    @csrf
                                  <div class="box-body">
                                    <div class="form-group">
                                        <label class="col-md-6">Foto Transaksi</label>
                                        <div class="col-md-6">
                                            <input type="file" name="">
                                        </div>
                                    </div>
                                  </div>
                                  <!-- /.box-body -->

                                  <div class="box-footer" style="padding-left: 350px;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </form>
                            </div>
                            </div>
                          
                        </div>
                      </div>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="custom-tabs-three-sukses" role="tabpanel" aria-labelledby="custom-tabs-three-sukses-tab">
                <table id="tabelSukses" class="table table-hover table-bordered">
                  <thead>                  
                    <tr>
                      <th>Pelatih</th>
                      <th>Pencari</th>
                      <th style="width: 50px;">Durasi</th>
                      <th>Biaya</th>
                      <th>Total</th>
                      <th style="width: 30px;">Foto</th>
                      <th style="width: 90px;">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Yusuf Assidiq</td>
                      <td>Restu Triadi</td>
                      <td>7</td>
                      <td>50000</td>
                      <td>350000</td>
                      <td>
                        <button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-warning">Pending</button>
                          <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="#">Sukses</a>
                              <a class="dropdown-item" href="#">Gagal</a>
                              <a class="dropdown-item" href="#">Pending</a>
                            </div>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Abdul Hafidh</td>
                      <td>Restu Triadi</td>
                      <td>7</td>
                      <td>50000</td>
                      <td>350000</td>
                      <td>
                        <button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-warning">Pending</button>
                          <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="#">Sukses</a>
                              <a class="dropdown-item" href="#">Gagal</a>
                              <a class="dropdown-item" href="#">Pending</a>
                            </div>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>                </div>
              <div class="tab-pane fade" id="custom-tabs-three-gagal" role="tabpanel" aria-labelledby="custom-tabs-three-gagal-tab">
                <table id="tabelGagal" class="table table-hover table-bordered">
                  <thead>                  
                    <tr>
                      <th>Pelatih</th>
                      <th>Pencari</th>
                      <th style="width: 50px;">Durasi</th>
                      <th>Biaya</th>
                      <th>Total</th>
                      <th style="width: 30px;">Foto</th>
                      <th style="width: 90px;">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Yusuf Assidiq</td>
                      <td>Restu Triadi</td>
                      <td>7</td>
                      <td>50000</td>
                      <td>350000</td>
                      <td>
                        <button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-warning">Pending</button>
                          <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="#">Sukses</a>
                              <a class="dropdown-item" href="#">Gagal</a>
                              <a class="dropdown-item" href="#">Pending</a>
                            </div>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Abdul Hafidh</td>
                      <td>Restu Triadi</td>
                      <td>7</td>
                      <td>50000</td>
                      <td>350000</td>
                      <td>
                        <button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-warning">Pending</button>
                          <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="#">Sukses</a>
                              <a class="dropdown-item" href="#">Gagal</a>
                              <a class="dropdown-item" href="#">Pending</a>
                            </div>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>                 </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
    <!-- /.row (main row) -->
  </section>
@endsection