<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function rproduktmerk()
    {
        return $this->belongsTo(Merek::class, 'merk_produk', 'id');
    }
    public function rkategoritkategori()
    {
        return $this->belongsTo(kategori::class, 'kategori', 'id');
    }
    public function rsub_kategoritkategori()
    {
        return $this->belongsTo(subkategori::class, 'sub_kategori', 'id');
    }
    public function rsub_subkategoritkategori()
    {
        return $this->belongsTo(Sub_Subkategori::class, 'sub_subkategori', 'id');
    }
}
