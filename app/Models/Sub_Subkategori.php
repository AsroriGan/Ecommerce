<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Subkategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'sub_kategori',
        'sub_subkategori',
    ];
    protected $table = "sub__subkategoris";
    protected $hidden;


    public function datakategori()
    {
        return $this->belongsTo(kategori::class, 'kategori', 'id');
    }

    public function datasubkategori()
    {
        return $this->belongsTo(subkategori::class, 'sub_kategori', 'id');
    }
}
