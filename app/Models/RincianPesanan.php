<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianPesanan extends Model
{
    use HasFactory;
    protected $table = "rincian_pesanan";
    protected $guarded = [];
    protected $primaryKey = "id";
}
