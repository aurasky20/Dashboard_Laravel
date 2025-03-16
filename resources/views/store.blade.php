@extends('master')

@section('title')
Hasil Data
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hasil Data Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="card-title">Data yang Dikirim</h3>
            </div>
            <div class="card-body">
            <table class="table table-bordered">
                  <thead>
                    <tr class="table-info">
                      <th>NRP</th>
                      <th>Nama Lengkap</th>
                      <th>Kelas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $nrp }}</td>
                      <td>{{ $nama }}</td>
                      <td>{{ $kelas }}</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
