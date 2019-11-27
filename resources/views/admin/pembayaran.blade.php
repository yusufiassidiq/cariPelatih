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
            <a href="/admin/pembayaran" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/pengguna" class="nav-link">
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
            <h1 class="m-0 text-dark">Daftar Transaksi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pembayaran</li>
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection