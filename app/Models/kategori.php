<?php

namespace App\Models;

use App\Models\subkategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['kategori'];
    protected $table = "kategoris";
    protected $hidden;

    public function idkategori()
    {
        return $this->hasMany(subkategori::class);
    }
}
