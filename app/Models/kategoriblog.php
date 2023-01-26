<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriblog extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "kategoriblogs";
    protected $primaryKey = "id";


    public function idkategoris()
    {
        return $this->hasMany(blog::class);
}
}
