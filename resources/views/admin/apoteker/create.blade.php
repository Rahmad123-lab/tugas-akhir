@extends('layouts.main')

@section('content')
<!-- Main Content -->
<div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Sidebar Toggle (Topbar) -->
        <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
        </form>AC
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                    <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <!-- End of Topbar -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 font-weight-bold">Tambah Dokter Baru</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="font-weight-bold text-primary">Biodata Dokter</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin-dokter.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_dokter">Nama Dokter</label>
                        <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror"
                            id="nama_dokter" name="nama_dokter" placeholder="Nama Dokter"
                            value="{{ old('nama_dokter') }}">
                        @error('nama_dokter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_dokter">Alamat</label>
                        <textarea name="alamat_dokter" id="alamat_dokter"
                            class="form-control @error('alamat_dokter') is-invalid @enderror"
                            id="exampleFormControlTextarea1" rows="3">{{ old('alamat_dokter') }}</textarea>
                        @error('alamat_dokter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="spesialisasi_dokter">Spesialisasi</label>
                        <select name="spesialisasi_dokter" id="spesialisasi_dokter"
                            class="form-control @error('spesialisasi_dokter') is-invalid @enderror" id="role">
                            <option value="Poli Umum" selected>Poli Umum</option>
                            <option value="Poli Anak">Poli Jantung</option>
                            <option value="Poli Lansia">Poli Ibu dan Anak</option>
                        </select>
                        @error('spesialisasi_dokter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jadwal_dokter">Jadwal</label>
                        <select name="jadwal_dokter" id="jadwal_dokter"
                            class="form-control @error('jadwal_dokter') is-invalid @enderror" id="role">
                            <option value="Pagi">08:00</option>
                            <option value="Pagi">09:00</option>
                            <option value="siang">13:00</option>
                            <option value="siang">15:00</option>
                        </select>
                        @error('jadwal_dokter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                            id="no_telp" name="no_telp" placeholder="Nomor Telepon"
                            value="{{ old('no_telp') }}">
                        @error('no_telp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection
