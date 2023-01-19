<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_merek',
        'foto_merek '
    ];
    protected $table = "mereks";
    protected $hidden;

    public function rmerekhproduk()
    {
        return $this->hasMany(Produk::class);
    }
}
