@extends('layouts.pencari')

@section('content')
<div class="img" style="height:150px; max-height:150px">
	<img src="{{url('/images/navbar.jpg')}}" class="img-fluid" alt="Colorlib Template">
</div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center" >
                  <img style="height:200px; max-height:200px" class="profile-user-img img-fluid img-circle"
                       src="{{ url('/pelatihfile/profpic/'.$pelatih->profpic) }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$pelatih->nama}}</h3>
        
                <p class="text-muted text-center">Pelatih {{$olahraga}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$pelatih->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>No Telf</b> <a class="float-right">{{$pelatih->telp}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">{{$pelatih->alamat}}</a>
                  </li>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<br>
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
              <div>
                  @if ($message = Session::get('success'))
                      <div id="messageAlert" class="alert alert-success alert-dismissible">
                        <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                        {{ $message }}
                      </div>
                  @endif
                  @if (count($errors) > 0)
                  <div id="messageAlert" class="alert alert-danger alert-dismissible">
                    <h4><i class="icon fa fa-close"></i> Gagal!</h4>
                    @foreach ($errors->all() as $error)
                    <label class="failed form-control alert alert-danger" >
                      <li>{{ $error }}</li>
                    </label>
                    @endforeach
                  </div>
                  @endif
              </div>
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Testimoni</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Lihat CV</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Booking Pelatih</a></li>
                </ul>
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="/bootstrapAdmin/dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
<br>
                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="/bootstrapAdmin/dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->
<br>
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="/bootstrapAdmin/dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="/bootstrapAdmin/dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="/bootstrapAdmin/dist/img/photo2.png" alt="Photo">
                              <img class="img-fluid" src="/bootstrapAdmin/dist/img/photo3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="/bootstrapAdmin/dist/img/photo4.jpg" alt="Photo">
                              <img class="img-fluid" src="/bootstrapAdmin/dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                  <div class="text-center" >
                  <img  class="profile-user-img img-fluid img-circle2"
                       src="{{ url('/pelatihfile/cv/'.$pelatih->cv) }}"
                       alt="User profile picture">
                </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" method="POST" action="{{ route('bookPelatih') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row" hidden>
                        <label for="idPencari" class="col-sm-2 col-form-label">Id Pencari</label>
                        <div class="col-sm-10">
                          <input type="text" value="{{$pencari->id}}" class="form-control" name="idPencari" placeholder="idPencari">
                        </div>
                      </div>
                      <div class="form-group row" hidden>
                        <label for="idPelatih" class="col-sm-2 col-form-label">Id Pelatih</label>
                        <div class="col-sm-10">
                          <input type="text" value="{{$pelatih->id}}" class="form-control" name="idPelatih" placeholder="idPelatih">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" value="{{$pencari->nama}}" class="form-control" name="nama" placeholder="Nama">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" value="{{$pencari->email}}" class="form-control" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                          <input type="datetime-local" value=""  class="form-control" name="tanggal" placeholder="Tanggal">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="durasi" class="col-sm-2 col-form-label">Durasi</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="durasi" placeholder="Dalam Jam">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="catatan" placeholder="Catatan"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Book</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(200, 0).slideUp(200, function(){
    $(this).remove(); 
  });
}, 3000);
</script>
<style>
.img-bordered-sm {
  border: 2px solid #adb5bd;
  padding: 2px;
}
.user-block img {
  float: left;
  height: 40px;
  width: 40px;
}
.img-circle {
  border-radius: 50%;
}
.img-circle2 {
  border-radius: 10%;
}
</style>
@endsection