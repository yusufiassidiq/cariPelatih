@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div><h3>Kategori Olahraga:</h3></div>
                    <br>
                    <?php $i = 0 ?>
                    @foreach ($kategoriOlahragas as $kategoriOlahraga)
                    <?php $i++ ?>
                        <td>{{$kategoriOlahraga->namaOlahraga}}</td> 
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
