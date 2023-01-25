<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "blogs";
    protected $primaryKey = "id";

    public function idblog()
    {
        return $this->hasMany(kategoriblog::class);
    }
}
