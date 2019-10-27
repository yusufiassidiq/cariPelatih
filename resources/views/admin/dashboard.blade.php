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

                    <div class="box-body">
                        <table id="tabel1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Calon Pelatih</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach($calonPelatihs as $calonPelatih)
                                <tr>
                           
                                    <td>{{$i++}}</td>
                                    <td>{{$calonPelatih->name}}</td>
                                    <td>{{$calonPelatih->email}}</td>
                                    <td>{{$calonPelatih->status}}</td>
                                    <td>
                                    @if($calonPelatih->status==="Menunggu Konfirmasi")
                                    <form id="terima-form-{{ $calonPelatih->id }}" action="{{route('Admin.terimaCalonPelatih',$calonPelatih->id) }}" style="display: none;" method="GET">
                                    {{ csrf_field() }}
                                    </form>           
                                    <button type="button" class="btn btn-primary" onclick="if(confirm('Are you sure? You want to accept this?')){
                                      event.preventDefault();
                                      document.getElementById('terima-form-{{ $calonPelatih->id }}').submit();
                                    } else {
                                      event.preventDefault();
                                    }"><i class="fa fa-checklist"></i> Terima </button>
                                    
                                    <form id="delete-form-{{ $calonPelatih->id }}" action="{{ route('Admin.deleteCalonPelatih',$calonPelatih->id) }}" style="display: none;" method="POST">
                                      @csrf
                                      @method('DELETE')
                                    </form>
                                    <button type="button" class="btn btn-danger" onclick="if(confirm('Are you sure? You want to delete this?')){
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $calonPelatih->id }}').submit();
                                    } else {
                                      event.preventDefault();
                                    }"><i class="fa fa-trash"></i> Tolak (masih delete ini) </button>
                                    @endif
                                    </td>
                                        
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

