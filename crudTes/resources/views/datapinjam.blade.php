@extends('layout.template')
        
<!-- START DATA -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
      <form class="d-flex" action="" method="get">
          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Cari</button>
      </form>
    </div>
    


    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-4">Nama Peminjam</th>
                <th class="col-md-3">Judul Buku</th>
                <th class="col-md-2">ID User</th>
                <th class="col-md-2">Tanggal Pinjam</th>
                <th class="col-md-2">Tanggal Kembali</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pinjam as $pinjam)
            <tr>
                <th>{{$pinjam->nama}}</th>
                <th>{{$pinjam->judul_buku}}</th>
                <th>{{$pinjam->id_user}}</th>
                <th>{{$pinjam->tanggal_pinjam}}</th>
                <th>{{$pinjam->tanggal_kembali}}</th>
                <td>
                    <a href='' class="btn btn-warning btn-sm">Edit</a>
                    <a href='' class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{$data_buku->links()}} --}}
   
</div>
<!-- AKHIR DATA -->
@endsection

  
