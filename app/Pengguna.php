<?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class Pengguna extends Model {

// namespace App;

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Auth\Authenticatable;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

// class Pengguna extends Model implements AuthenticatableContract
// {
    
//     use Authenticatable;
namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'pengguna';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'username','password_user'
    ];
    public $timestamps = false;
}
