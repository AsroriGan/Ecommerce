<?php

namespace App\Models;

use App\Models\kategori;
use App\Models\Sub_Subkategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subkategori extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    public function idsub_subkategori()
    {
        return $this->hasMany(Sub_Subkategori::class);
    }

    public function idkategoris()
    {
        return $this->belongsTo(kategori::class,'id');
    }
}
