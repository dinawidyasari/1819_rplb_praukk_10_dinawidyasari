@extends('layouts.master')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="pendataan barang">List Pendataan Barang</a>
        </li>
          <a class="nav-link active" aria-current="page" href="penawaran">List Penawaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="masyarakat">List Masyarakat</a>
        </li>
        <a class="nav-link active" aria-current="page" href="petugas">List Petugas</a>
        <li class="nav-item">
      </li>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="form laporan">Form Laporan</a>
        </li>
      </ul>


      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      

      </form>
    </div>
  </div>
</nav>

<div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Penawaran</th>
                       </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <th scope="col">1</th>
                    <th scope="col">Mika</th>
                    <th scope="col">Mesya</th>
                    <th scope="col">Baju</th>
                    <th scope="col">Rp.100.000</th>
                    </tr>

                    <tr>
                    <th scope="col">2</th>
                    <th scope="col">Arga</th>
                    <th scope="col">Aisyah</th>
                    <th scope="col">Kemeja</th>
                    <th scope="col">Rp.150.000</th>
                    </tr>

                    <tr>
                    <th scope="col">3</th>
                    <th scope="col">Elvira</th>
                    <th scope="col">Rakenza</th>
                    <th scope="col">Meja</th>
                    <th scope="col">Rp.2.500.000</th>
                    </tr>

                    <tr>
                    <th scope="col">4</th>
                    <th scope="col">Tania</th>
                    <th scope="col">Alvaska</th>
                    <th scope="col">Motor</th>
                    <th scope="col">Rp.3.000.000</th>
                   </tr>

                    <tr>
                    <th scope="col">5</th>
                    <th scope="col">Novi</th>
                    <th scope="col">Geral</th>
                    <th scope="col">Meja makan</th>
                    <th scope="col">Rp.2.000.000</th>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>









@endsection