<?php

use Illuminate\Database\Seeder;

class PendaftaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pendaftaran')->delete();
        
        \DB::table('pendaftaran')->insert(array (
            0 => 
            array (
                'id_pendaftaran' => 'P0001',
                'nama_pendaftar' => 'Diva Maya Hapsari',
                'asal_daerah' => 'Sidoarjo',
                'asal_univ_pendaftar' => 'Universitas Airlangga',
                'email_pendaftar' => 'deaamartya3@gmail.com',
                'no_telepon_pendaftar' => '081333654616',
                'id_line_pendaftar' => 'deaamartyad',
                'scan_ktm' => 'scan_ktm/scan_ktm-P0001.jpeg',
                'pas_foto' => 'pas_foto/pas_foto-P0001.jpeg',
                'scan_suket_aktif' => NULL,
                'tgl_pendaftaran' => '2020-08-26 22:15:33',
                'status_pendaftaran' => 0,
            ),
            1 => 
            array (
                'id_pendaftaran' => 'P0002',
                'nama_pendaftar' => 'Hasgfjhagfhasgfhjg',
                'asal_daerah' => NULL,
                'asal_univ_pendaftar' => 'Sgfjhagfhag',
                'email_pendaftar' => 'deaamartya3@gmail.com',
                'no_telepon_pendaftar' => NULL,
                'id_line_pendaftar' => NULL,
                'scan_ktm' => NULL,
                'pas_foto' => NULL,
                'scan_suket_aktif' => NULL,
                'tgl_pendaftaran' => '2020-08-28 20:36:32',
                'status_pendaftaran' => 0,
            ),
            2 => 
            array (
                'id_pendaftaran' => 'P0003',
                'nama_pendaftar' => 'Qfgajkgfj',
                'asal_daerah' => NULL,
                'asal_univ_pendaftar' => 'Jasfgajfgajsgf',
                'email_pendaftar' => 'deaamartya3@gmail.com',
                'no_telepon_pendaftar' => NULL,
                'id_line_pendaftar' => NULL,
                'scan_ktm' => NULL,
                'pas_foto' => NULL,
                'scan_suket_aktif' => NULL,
                'tgl_pendaftaran' => '2020-08-28 20:39:34',
                'status_pendaftaran' => 0,
            ),
            3 => 
            array (
                'id_pendaftaran' => 'P0004',
                'nama_pendaftar' => 'Hjasgfahgfhjasfj',
                'asal_daerah' => NULL,
                'asal_univ_pendaftar' => 'Jhagjhagfhjagdj',
                'email_pendaftar' => 'deaamartya3@gmail.com',
                'no_telepon_pendaftar' => NULL,
                'id_line_pendaftar' => NULL,
                'scan_ktm' => NULL,
                'pas_foto' => NULL,
                'scan_suket_aktif' => NULL,
                'tgl_pendaftaran' => '2020-08-28 21:01:33',
                'status_pendaftaran' => 0,
            ),
            4 => 
            array (
                'id_pendaftaran' => 'P0005',
                'nama_pendaftar' => 'Dadjfhajsfhjashf',
                'asal_daerah' => NULL,
                'asal_univ_pendaftar' => 'Djfhjahfjahfjh',
                'email_pendaftar' => 'deaamartya3@gmail.com',
                'no_telepon_pendaftar' => NULL,
                'id_line_pendaftar' => NULL,
                'scan_ktm' => NULL,
                'pas_foto' => NULL,
                'scan_suket_aktif' => NULL,
                'tgl_pendaftaran' => '2020-08-29 23:48:02',
                'status_pendaftaran' => 0,
            ),
        ));
        
        
    }
}