@extends('layouts.app')

@section('konten')

<div class="content-wrapper">

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="table-responsive pt-3">
          <table class="table table-striped project-orders-table">
            <thead>
              <tr>
                <th>Nama Penjual</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($produk as $prdk)
              <tr>
                <td>{{ $prdk->pengguna->name }}</td>
                <td>{{ $prdk->nama }}</td>
                <td>{{ $prdk->deskripsi }}</td>
                <td>{{ $prdk->harga }}</td>
                <td>{{ $prdk->stok }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection