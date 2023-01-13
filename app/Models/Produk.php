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
        return $this->belongsTo(Merek::class, 'nama_merek ', 'id');
    }
}
