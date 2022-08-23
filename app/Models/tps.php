<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tps extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query)
    {
        if (request('search')){
            return $query;
        }
    }




    public function suara()
    {
        return $this->hasOne(Suara::class);
    }
    public function pencoblos()
    {
        return $this->hasMany(Pencoblos::class);
    }

    use HasFactory;
    protected $guarded = ['id',];
    // protected $fillable = ['id_pencoblos','id_suara', 'namatps', 'slug', 'tmp_tps', 'kt_anggota'];
}
