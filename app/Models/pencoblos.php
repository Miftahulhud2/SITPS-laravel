<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pencoblos extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function tps()
    {
        return $this->belongsTo(tps::class);
    }



    // protected $fillable = ['nama', 'nik', 'tmp_lahir', 'tgl_lahir', 'umur', 'sts_kawin', 'jns_kelamin', 'alamat'];
    public function scopeFilter($query)
    {
        return $query->where('nama', 'like', '%' . request('search') . '%')
            ->orWhere('jns_kelamin', 'like', '%' . request('search') . '%');
            
    }

}


