@extends('layouts.admin')

@section('content')
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/pembayaran" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/pengguna" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manage Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- Main row -->
        <div class="row">
          <div class="col-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-pelatih-tab" data-toggle="pill" href="#custom-tabs-two-pelatih" role="tab" aria-controls="custom-tabs-two-pelatih" aria-selected="true">Pelatih</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-pencari-tab" data-toggle="pill" href="#custom-tabs-two-pencari" role="tab" aria-controls="custom-tabs-two-pencari" aria-selected="false">Pencari</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-two-pelatih" role="tabpanel" aria-labelledby="custom-tabs-two-pelatih-tab">
                    <table id="tabelPelatih" class="table table-hover table-bordered" style="width: 100% !important;">
                      <thead>    
                        <tr>
                          <th rowspan="2">Nama</th>
                          <th rowspan="2">Email</th>
                          <th rowspan="2">Tanggal Registrasi</th>
                          <th colspan="2">Jumlah Transaksi</th>
                          <th rowspan="2">Action</th>
                        </tr>              
                        <tr>
                          <th>Sukses</th>
                          <th>Gagal</th>
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
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Abdul Hafidh</td>
                          <td>Restu Triadi</td>
                          <td>7</td>
                          <td>50000</td>
                          <td>350000</td>
                          <td>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-pencari" role="tabpanel" aria-labelledby="custom-tabs-two-pencari-tab">
                    <table id="tabelPencari" class="table table-hover table-bordered" style="width: 100% !important;">
                      <thead>    
                        <tr>
                          <th rowspan="2">Nama</th>
                          <th rowspan="2">Email</th>
                          <th rowspan="2">Tanggal Registrasi</th>
                          <th colspan="2">Jumlah Transaksi</th>
                          <th rowspan="2">Action</th>
                        </tr>              
                        <tr>
                          <th>Sukses</th>
                          <th>Gagal</th>
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
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Abdul Hafidh</td>
                          <td>Restu Triadi</td>
                          <td>7</td>
                          <td>50000</td>
                          <td>350000</td>
                          <td>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>               
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection