<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pengguna
 * 
 * @property string $id_user
 * @property string $id_role
 * @property string|null $id_pendaftaran
 * @property string $username
 * @property string $password_user
 * @property bool $status_user
 * 
 * @property Role $role
 * @property Pendaftaran $pendaftaran
 *
 * @package App\Models
 */
class Pengguna extends Model
{
	protected $table = 'pengguna';
	protected $primaryKey = 'id_user';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'status_user' => 'bool'
	];

	protected $fillable = [
		'id_role',
		'id_pendaftaran',
		'username',
		'password_user',
		'status_user'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_role');
	}

	public function pendaftaran()
	{
		return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran');
	}
}
