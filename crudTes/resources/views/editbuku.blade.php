<!DOCTYPE html>
<html>

<body>
 
	<h3>Edit Buku</h3>
 
	<a href="/buku"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($databuku as $buku)
	<form action="/buku/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $buku->id_buku }}"> <br/>
		Judul Buku <input type="text" required="required" name="judul_buku" value="{{ $buku->judul_buku }}"> <br/>
		Nama Pengarang <input type="text" required="required" name="nama_pengarang" value="{{ $buku->nama_pengarang }}"> <br/>
		Tahun Terbit <input type="number" required="required" name="tahun_terbit" value="{{ $buku->tahun_terbit }}"> <br/>
		Nama Penerbit <textarea required="required" name="nama_penerbit">{{ $buku->nama_penerbit }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>