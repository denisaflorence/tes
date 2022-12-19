<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['judul_buku','nama_pengarang', 'nama_penerbit','tahun_terbit','gambar_buku','jumlah_buku'];
    protected $table = 'buku';
    public $timestamps = false;
}
