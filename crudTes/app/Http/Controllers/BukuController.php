<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Session;
use Session;

class BukuController extends Controller
{
    
    public function index()
    {
        $data_buku = Buku::all();
        return view('bukuhome', compact('data_buku'));

    }
    public function user(){
        return view('homeuser');
    }

    public function create()
    {
        return view('addbuku');
    }

    public function addbook(Request $request)
    {
        // $books = new Buku();
        // $books->judul_buku = $request->judul_buku;
        // $books->nama_penerbit = $request->nama_penerbit;
        // $books->tahun_terbit = $request->tahun_terbit;
        // $books->nama_pengarang = $request->nama_pengarang;
        // $books->gambar_buku = $request->gambar_buku;
        // $books->status_del = 0;
        // $books->save();

        // return redirect()->route('buku');
        Session::flash('judul_buku',$request->judul_buku);
        Session::flash('nama_pegarang',$request->nama_pengarang);
        Session::flash('nama_penerbit',$request->nama_penerbit);
        Session::flash('tahun_terbit',$request->tahun_terbit);
        Session::flash('gambar_buku',$request->gambar_buku);
        Session::flash('jumlah_buku',$request->jumlah_buku);
        // Session::flash('status_del',status_del='0');

        $request -> validate([
          'judul_buku'  => 'required',
          'nama_penerbit'  => 'required',
          'tahun_terbit'  => 'required',
          'nama_pengarang' => 'required',
          'gambar_buku'  => 'required',
          'jumlah_buku' => 'required',
          
        ],[
            'judul_buku.required'  => 'Judul Buku wajib diisi',
            'nama_penerbit.required'  => 'Nama Penerbit wajib diisi',
            'tahun_terbit.required'  => 'Tahun Terbit wajib diisi',
            'nama_pengarang.required'  => 'Nama Pengarang wajib diisi',
            'gambar_buku.required'  => 'Gambar wajib diisi',
            'jumlah_buku.required' => 'Jumlah Buku wajib diisi',
          ]);

        //   if($request->hasFile('gambar_buku')){
        //     $path = $request->file('gambar_buku')->store('uploads');
        //   }else{
        //     $path = '';
        //   }
        $data_buku = [
            'judul_buku'=>$request->judul_buku,
            'nama_penerbit'=>$request->nama_penerbit,
            'tahun_terbit'=>$request->tahun_terbit,
            'nama_pengarang'=>$request->nama_pengarang,
            'gambar_buku'=>$request->gambar_buku,
            'jumlah_buku'=>$request->jumlah_buku,
        ];
        Buku::create($data_buku);
        return redirect()->to('buku')->with('success','berhasil menambah data');
    }
    // public function store(Request $request)
    // {
    //     Session::flash('judul_buku',$request->judul_buku);
    //     Session::flash('nama_pegarang',$request->nama_pengarang);
    //     Session::flash('nama_penerbit',$request->nama_penerbit);
    //     Session::flash('tahun_terbit',$request->tahun_terbit);
    //     Session::flash('gambar_buku',$request->gambar_buku);
    //     // Session::flash('status_del',status_del='0');

    //     $request -> validate([
    //       'judul_buku'  => 'required',
    //       'nama_penerbit'  => 'required',
    //       'tahun_terbit'  => 'required',
    //       'nama_pegarang' => 'required',
    //       'gambar_buku'  => 'required',
          
    //     ],[
    //         'judul_buku.required'  => 'NIM wajib diisi',
    //         'nama_penerbit.required'  => 'NIM wajib diisi angka',
    //         'tahun_terbit.required'  => 'NIM terdaftar sudah ada dalam database',
    //         'nama_pegarang.required'  => 'Nama wajib diisi',
    //         'gambar_buku.required'  => 'Jurusan wajib diisi',
    //       ]);
    //     $data_buku = [
    //         'judul_buku'=>$request->judul_buku,
    //         'nama_penerbit'=>$request->nama_penerbit,
    //         'tahun_terbit'=>$request->tahun_terbit,
    //         'nama_pegarang'=>$request->nama_pengarang,
    //         'gambar_buku'=>$request->gambar_buku,
    //     ];
    //     Buku::create($data_buku);
    //     return redirect()->to('bukuhome')->with('success','berhasil menambah data');
        
        
        
    // }

    // method untuk edit data pegawai
// public function edit($id)
// {
// 	// mengambil data pegawai berdasarkan id yang dipilih
// 	$databuku = DB::table('buku')->where('id_buku',$id)->get();
// 	// passing data pegawai yang didapat ke view edit.blade.php
// 	return view('editbuku',['buku' => $databuku]);
 
// }

// update data buku
// public function update(Request $request)
// {
// 	// update data buku
// 	DB::table('buku')->where('id_buku',$request->id)->update([
// 		'judul_buku' => $request->judul_buku,
// 		'nama_pengarang' => $request->nama_pengarang,
// 		'tahun_terbit' => $request->tahun_terbit,
// 		'nama_penerbit' => $request->nama_penerbit
// 	]);
// 	// alihkan halaman ke halaman buku
// 	return redirect('/buku');
// }

public function hapus($id)
{
	// menghapus data buku berdasarkan id yang dipilih
	DB::table('buku')->where('id_buku',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/buku');
}

}
