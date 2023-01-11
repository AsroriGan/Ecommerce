<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datawilayahkabupaten extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = "id";
    protected $table = "datawilayahkabupaten";

    public function kaprovinsi()
    {
        return $this->hasMany(datawilayahkecamatan::class);
    }

    public function rprovinsi()
    {
        return $this->belongsTo(Datawilayah::class, 'provinsi', 'id');
    }
}
