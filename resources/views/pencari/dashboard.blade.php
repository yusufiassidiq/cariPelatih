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
                    <div class="square">Renang</div>
                    <div class="square">Tenis Lapang</div>
                    <div class="square">Basket</div>
                    <div class="square">Badminton</div>
                    <div class="square">Sepak Bola</div>
                    <div class="square">Karate</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
