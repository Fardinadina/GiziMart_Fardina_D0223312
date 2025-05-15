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
                <th>ID</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kategori as $ktgr)
              <tr>
                <td>{{ $ktgr->id }}</td>
                <td>{{ $ktgr->nama }}</td>
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