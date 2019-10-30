@extends('layouts.pencari')

@section('content')
<br>
<br>
<br>
<br>
        
    <body>
        <div class="container">
            <div class="row justify-content-center">
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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Register Pelatih') }}</div>
                
                        <div class="card-body">
                            <form method="POST" action="{{ route('addPelatih') }}" enctype="multipart/form-data">
                                @csrf
                
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                
                                    <div class="col-md-6">
                                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                
                                <div class="form-group row">
                                    <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                
                                    <div class="col-md-6">
                                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">
                
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                
                                <div class="form-group row">
                                    <label for="telp" class="col-md-4 col-form-label text-md-right">{{ __('Phone Numb') }}</label>
                
                                    <div class="col-md-6">
                                        <input id="telp" type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" required autocomplete="telp">
                
                                        @error('telp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-md-4 col-form-label text-md-right">Tarif</label>
                                  <div class="col-sm-6">
                                    <input type="number" id="tarif" name="tarif" class="form-control" min="0" placeholder="Enter.." >
                                  </div>
                                </div>
                
                                <div class="form-group row">
                                  <label class="col-md-4 col-form-label text-md-right">Foto Profil</label>
                                  <div class="col-sm-4">
                                    <input type="file" name="imgURL" required>      
                                  </div>
                                </div>
                
                                <div class="form-group row">
                                  <label class="col-md-4 col-form-label text-md-right">CV</label>
                                  <div class="col-sm-4">
                                    <input type="file" name="cv" size="20"/>      
                                  </div>
                                </div>
                
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(200, 0).slideUp(200, function(){
    $(this).remove(); 
  });
}, 3000);
</script>
