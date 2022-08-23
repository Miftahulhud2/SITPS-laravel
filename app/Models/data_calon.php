<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_calon extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['nm_calon1'];

}
