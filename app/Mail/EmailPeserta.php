<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Pengguna;

class EmailPeserta extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Pengguna $user,$link)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@deaamartya.masuk.id', 'Panitia KAA 2020')
            ->subject('Selamat Datang!')
            ->markdown('emails.welcome')
            ->with([
                'name' => $this->user->nama_pendaftar,
                'link' => $this->link
            ]);
    }
}
