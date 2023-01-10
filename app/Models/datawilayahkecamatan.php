<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datawilayahkecamatan extends Model
{
    use HasFactory;

    protected $table = 'datawilayahkecamatan';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function kprovinsi()
    {
        return $this->belongsTo(Datawilayah::class, 'provinsi', 'id');
    }

    public function kkabupaten()
    {
        return $this->belongsTo(datawilayahkabupaten::class, 'kabupaten', 'id');
    }
}
