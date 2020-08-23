<?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class Pendaftaran extends Model
// {
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Pendaftaran extends Model implements AuthenticatableContract {
    
    use Authenticatable;
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    protected $fillable = [
        'nama_pendaftar','asal_univ_pendaftar','email_pendaftar'
    ];
    public $timestamps = false;
}
