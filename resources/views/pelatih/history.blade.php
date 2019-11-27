@extends('layouts.pelatih')

@section('content')
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/pelatih" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pelatih/history" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                History
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pelatih/pekerjaan" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pekerjaan
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
            <h1 class="m-0 text-dark">History</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">History</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-clipboard-check"></i>
                  Job History
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <table id="tabelPekerjaan" class="table table-hover table-bordered">
                      <thead align="center">                  
                        <tr>
                          <th>Nama Client</th>
                          <th>E-mail</th>
                          <th>No. Telp</th>
                          <th>Tanggal</th>
                          <th>Jam Mulai</th>
                          <th>Durasi (Jam)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Carls Sr</td>
                          <td>cj_senior@mail.com</td>
                          <td>081913748391</td>
                          <td>23 Januari 2019</td> 
                          <td>10.00</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Stu</td>
                          <td>stu@mail.com</td>
                          <td>081223121391</td>
                          <td>31 Mei 2019</td> 
                          <td>11.00</td>
                          <td>2</td>
                        </tr>
                      </tbody>
                  </table>
                </div>
              </div><!-- /.card-body -->
            </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

