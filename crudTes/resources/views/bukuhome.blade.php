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
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <a href='{{url('create')}}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <!-- TOMBOL DATA PEMINJAMAN -->
    <div class="pb-3">
        <a href='{{url('data')}}' class="btn btn-primary"> Data Peminjaman</a>
      </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-4">Gambar Buku</th>
                <th class="col-md-3">Judul Buku</th>
                <th class="col-md-1">Nama Pengarang</th>
                <th class="col-md-2">Tahun Terbit</th>
                <th class="col-md-2">Penerbit</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <th><img src="{{asset($buku->gambar_buku)}}"></th>
                <th>{{$buku->judul_buku}}</th>
                <th>{{$buku->nama_pengarang}}</th>
                <th>{{$buku->tahun_terbit}}</th>
                <th>{{$buku->nama_penerbit}}</th>
                <td>
                    {{-- <a href='' class="btn btn-warning btn-sm">Edit</a> --}}
                    <a href="/buku/edit/{{ $buku->id_buku }}">Edit</a>
                    {{-- <a href='' class="btn btn-danger btn-sm">Del</a> --}}
                    <a href="/buku/hapus/{{ $buku->id_buku}}">Hapus</a>
                    {{-- @foreach ($posts as $post)
                        <tr>
                            <form method="POST" action="{{ url('post/delete', $post->id ) }}">
                                @csrf
                                @method('DELETE')
                                <td><button>Hapus</button></td>
                            </form> 
                            </tr>
                    @endforeach --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{$data_buku->links()}} --}}
   
</div>
<!-- AKHIR DATA -->
@endsection

  
