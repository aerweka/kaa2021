<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PembayaranDiterimaMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
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
            ->subject('Pembayaranmu sudah diterima')
            ->markdown('emails.verifikasiditerima')
            ->with([
                'user' => $this->user,
            ]);
    }
}
