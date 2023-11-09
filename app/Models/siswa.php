<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

     //set tabel
     protected $table='siswa';
    
     //set primarykey
     protected $primaryKey = 'nisn';
 
 
     public $incrementing = false;
 
 
     //set data primary key
     protected $keyType = 'string';
 
     //string kolom yang dapat diisi secara masal
     protected $guarded = [];
 }

