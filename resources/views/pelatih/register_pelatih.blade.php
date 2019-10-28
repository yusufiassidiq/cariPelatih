<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
        
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
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
            <div class="content">

                <div class="box-body">
                <div class="title m-b-md">
                    Daftar Pelatih
                </div>
                    <form class="form-horizontal" action="{{ route('Admin.addPelatih') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama<span style="color: red">*</span></label>
                            <div class="col-sm-12">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" placeholder="Enter ..." autofocus>
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Email<span style="color: red">*</span></label>
                          <div class="col-sm-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter ..." autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Password <span style="color: red">*</span></label>
                          <div class="col-sm-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter ...">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Confirm Password <span style="color: red">*</span></label>
                          <div class="col-sm-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter ...">
                          </div>
                        </div>

                        <div class="box-footer">
                            <div class="col-sm-9">
                                <div class="col-sm-4 pull-right"><button type="submit" class="btn btn-block btn-success btn-lg">Save</button></div>
                            </div>          
                        </div>
                        
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>

<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(200, 0).slideUp(200, function(){
    $(this).remove(); 
  });
}, 3000);
</script>