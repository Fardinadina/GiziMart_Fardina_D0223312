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
                <th>Nama Pengguna</th>
                <th>Nama Produk</th>
                <th>Nilai</th>
                <th>Komentar</th>

                
              </tr>
            </thead>
            <tbody>
                @foreach ($ulasan as $ul)
                <tr>
                <td>{{ $ul->pengguna->name }}</td>
                <td>{{ $ul->produk->nama }}</td>
           
                <td>{{ $ul->nilai }}</td>
                <td>{{ $ul->komentar }}</td>
         
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