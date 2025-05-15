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
                <th>Nama Pelanggan</th>
                <th>Nama Produk</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Jumlah</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($pesanan1 as $psn)
                <tr>
                <td>{{ $psn->pelanggan->name }}</td>
                <td>
                    @foreach ($psn->itemPesanan as $item)
                    {{ $item->produk->nama }} <br>
                    @endforeach
                </td>
                <td>{{ $psn->total_harga }}</td>
                <td>{{ $psn->status }}</td>
                <td>
                    @foreach ($psn->itemPesanan as $item)
                    {{ $item->jumlah }}<br>
                    @endforeach
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
@endsection