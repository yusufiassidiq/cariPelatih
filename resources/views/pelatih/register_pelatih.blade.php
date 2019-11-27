<script src="js/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{ asset('css/bootstrap.register.css') }}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<body style="background: -webkit-linear-gradient(left, #ff0000, #ffaf42);">    
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="{{asset('/images/olahraga/basketball-ball-variant.png')}}" alt=""/>
                <h3>Welcome</h3>
                <p>Daftarkan dirimu sebagai pencari atau pelatih disini!</p>
                <a href="{{route('home')}}" ><input type="Submit" name="" value="Home"/><br/></a>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pencari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pelatih</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Daftar Sebagai Pencari</h3>
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus />
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="" required autocomplete="new-password" />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" value="" required autocomplete="new-password" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Kota Domisili" value="{{ old('alamat') }}" required autocomplete="alamat" />
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="telp" type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" placeholder="No. Telepon" value="{{ old('telp') }}" required autocomplete="telp" />
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register"/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Daftar Sebagai Pelatih</h3>
                        <form method="POST" action="{{ route('addPelatih') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus />
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="telp" type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" placeholder="Telepon" value="{{ old('telp') }}" required autocomplete="telp" />
                                        @error('telp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}" required autocomplete="alamat">
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="asd">
                                            <option class="hidden"  selected disabled>Kategori Olahraga</option>
                                            @foreach ($kategoriOlahragas as $kategoriOlahraga)
                                            <option value="{{ $kategoriOlahraga->id }}">{{$kategoriOlahraga->namaOlahraga}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="tarif" type="number" class="form-control @error('tarif') is-invalid @enderror" name="tarif" placeholder="Tarif per jam" value="{{ old('tarif') }}" required autocomplete="tarif" />
                                        @error('tarif')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="" required autocomplete="new-password" />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" value="" required autocomplete="new-password" />
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-6">Foto Profil</label>
                                        <div class="col-md-6">
                                            <input type="file" name="profpic">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-6">CV</label>
                                        <div class="col-md-6">
                                            <input type="file" name="cv">
                                        </div>
                                    </div>

                                    <input type="submit" class="btnRegister"  value="Register"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
