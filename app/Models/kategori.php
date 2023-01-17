<?php

namespace App\Models;

use App\Models\subkategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategori extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = ['kategori'];
    protected $dates = ['created_at'];
    protected $table = "kategoris";

    public function idkategori()
    {
        return $this->hasMany(subkategori::class);
    }
}
