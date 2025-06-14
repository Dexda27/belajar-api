<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';

    protected $fillable = ['nama', 'email', 'jurusan'];

    protected $primaryKey = "nim";

    protected $guarded = [];

    

}
