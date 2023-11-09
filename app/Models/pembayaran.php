<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    //set tabel
    protected $table='pembayaran';
    
    //set primarykey
    protected $primaryKey = 'id_pembayaran';


    public $incrementing = false;


    //set data primary key
    // protected $keyType = 'string';

    //string kolom yang dapat diisi secara masal
    protected $guarded = [];
}
