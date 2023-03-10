<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'fotosampul',
        'notelepon',
        'foto',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_datawilayah()
    {
        return $this->belongsTo(Datawilayah::class, 'provinsi', 'id');
    }
    public function user_datawilayahkabupaten()
    {
        return $this->belongsTo(datawilayahkabupaten::class, 'kabupaten', 'id');
    }
    public function user_datawilayahkecamatan()
    {
        return $this->belongsTo(datawilayahkecamatan::class, 'kecamatan', 'id');
    }
    public function by_pesananmasuk()
    {
        return $this->hasMany(Pesananmasuk::class);
    }
}
