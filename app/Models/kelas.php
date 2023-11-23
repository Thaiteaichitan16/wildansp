<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kelas extends Model
{
    use HasFactory;

    //set tabel
    protected $table='kelas';
    
    //set primarykey
    protected $primaryKey = 'id_kelas';


    public $incrementing = false;


    //set data primary key
    // protected $keyType = 'string';

    //string kolom yang dapat diisi secara masal
    protected $guarded = [];

    public function siswa(): HasMany
    {
        return $this->hasMany(siswa::class, 'id_kelas','id_kelas');
    }
}
