@extends('master')
@section('body')
<br>
<br>
<br>
<br>
<div class="row text-center">
	<div class="col d-flex justify-content-center" style="left: 94px;">
		<img class="img-fluid" src="{{asset('/img/404-2.png')}}" style="width: 800px;">
		<a href="https://www.vecteezy.com/free-vector/404-error" style="visibility: hidden;">404 Error Vectors by Vecteezy</a>
	</div>
</div>
<div class="row text-center my-5">
	<div class="col mx-auto">
		<a href="{{url('/')}}"><button class="btn px-4" style="border-radius: 20px;background-color: #1d2d8c;color: white;font-family: Montserrat;font-weight: 500;">Kembali ke Beranda</button></a>
	</div>
</div>
@endsection