<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriblog extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategoriblog'
    ];
    protected $primaryKey = "id";
    protected $guarded = [];


    public function idkategoris()
    {
        return $this->belongsTo(blog::class, 'kategoriblog', 'id');
}
}
