<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    protected $fillable = [
        'nama_pendaftar','asal_univ_pendaftar','email_pendaftar'
    ];
    public $timestamps = false;
}
