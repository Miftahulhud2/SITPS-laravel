<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class suara extends Model
{
    use HasFactory;

    public function tps()
    {
        return $this->belongsTo(Tps::class);
    }


    protected $table = 'suaras';
    protected $guarded = ['id'];
}
