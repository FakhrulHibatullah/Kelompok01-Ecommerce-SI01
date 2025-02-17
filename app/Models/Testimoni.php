<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal', 'nama_tokoh', 'komentar', 'rating', 'produk_id', 'kategori_tokoh_id']; 
}
