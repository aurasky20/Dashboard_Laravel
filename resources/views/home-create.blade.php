@extends('master')

@section('title')
Tambah Data
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header bg-info">
          <h3 class="card-title">Masukkan Data</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool bg-danger" data-card-widget="remove" title="Remove">
              <a href="{{ route('home') }}">
                  <i class="fas fa-times"></i>
              </a>
            </button>
          </div>
        </div>
        <div class="card-body">
        <form action="{{ route('home.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="NRP">NRP</label>
                    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukkan NRP">
                  </div>
                  <div class="form-group">
                  <label>Kelas</label>
                        <select class="custom-select" id="kelas" name="kelas">
                          <option>D3 TEKNIK INFORMATIKA A</option>
                          <option>D3 TEKNIK INFORMATIKA B</option>
                          <option>D4 TEKNIK INFORMATIKA A</option>
                          <option>D4 TEKNIK INFORMATIKA B</option>
                          <option>D4 SAINS DATA A</option>
                          <option>D4 SAINS DATA B</option>
                        </select>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="d-flex justify-content-start mx-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
              </form>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection

@section('username')
Aurasky
@endsection