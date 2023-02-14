<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesananmasuk extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "pesananmasuk";
    protected $guarded = [];

    public function to_user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function to_payment(){
        return $this->belongsTo(payment::class, 'payment_id', 'id');
    }
}
