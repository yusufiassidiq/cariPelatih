  <script src="js/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{ asset('css/bootstrap.register.css') }}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input type="submit" name="" value="Login"/><br/>
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
                        @csrf
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

                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span> 
                                        </label>
                                    </div>
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

                                <!-- <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div> -->
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                                </div> -->
                                <input type="submit" class="btnRegister" value="Register"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Daftar Seebagai Pelatih</h3>
                    <form method="POST" action="{{ route('addPelatih') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
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

                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span> 
                                        </label>
                                    </div>
                                </div>
                            </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="`Answer *" value="" />
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
