<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datawilayah extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "datawilayah";
    protected $primaryKey = "id";
}
