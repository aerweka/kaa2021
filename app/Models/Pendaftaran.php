<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pendaftaran
 * 
 * @property string $id_pendaftaran
 * @property string $nama_pendaftar
 * @property string $asal_daerah
 * @property string $asal_univ_pendaftar
 * @property string $email_pendaftar
 * @property string $no_telepon_pendaftar
 * @property string $id_line_pendaftar
 * @property string $scan_ktm
 * @property string $pas_foto
 * @property string|null $scan_suket_aktif
 * @property Carbon $tgl_pendaftaran
 * 
 * @property Collection|Pembayaran[] $pembayarans
 * @property Collection|Pengguna[] $penggunas
 *
 * @package App\Models
 */
class Pendaftaran extends Model
{
	protected $table = 'pendaftaran';
	protected $primaryKey = 'id_pendaftaran';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'tgl_pendaftaran'
	];

	protected $fillable = [
		'nama_pendaftar',
		'asal_daerah',
		'asal_univ_pendaftar',
		'email_pendaftar',
		'no_telepon_pendaftar',
		'id_line_pendaftar',
		'scan_ktm',
		'pas_foto',
		'scan_suket_aktif',
		'tgl_pendaftaran'
	];

	public function pembayarans()
	{
		return $this->hasMany(Pembayaran::class, 'id_pendaftaran');
	}

	public function penggunas()
	{
		return $this->hasMany(Pengguna::class, 'id_pendaftaran');
	}
}
