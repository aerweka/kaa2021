@component('mail::message')
Halo  **{{$name}}** !   
Terimakasih telah melakukan pendaftaran lomba KAA 2020. Langkah selanjutnya yaitu pembayaran.  
Peserta melakukan pembayaran dengan tujuan rekening:  
Bank BRI  
<b style="color: red;">6291-01-016958-53-9 a/n Jeni Dwi Fitriana  </b>
Sejumlah <b>Rp 50.000</b>   
Setelah melakukan pembayaran, jangan lupa konfirmasi dengan klik tombol dibawah ya!

@component('mail::button', ['url' => $link, 'color' => 'success'])
Konfirmasi Pembayaran
@endcomponent

Thanks,<br>
Panitia KAA 2020
@endcomponent