<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $primaryKey = 'idmk';
    protected $fillable = ['mk'];
}
