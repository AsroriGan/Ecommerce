<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Subkategori extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];


    public function datakategori()
    {
        return $this->belongsTo(kategori::class, 'kategori', 'id');
    }

    public function datasubkategori()
    {
        return $this->belongsTo(subkategori::class, 'subkategori', 'id');
    }
}
