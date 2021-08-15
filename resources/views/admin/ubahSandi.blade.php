@extends('layouts.layout')

@section('extendsTitle', 'Ubah Sandi')

@section('pageTitle', 'Ubah Sandi')

@section('extendsBreadcrump')
<li class="breadcrumb-item active" aria-current="page">Ubah Sandi</li>
@endsection

@section('headerContent')

@endsection
@section('bodyContent')
<div class="row">
  <div class="col-md-12">
    <div class="card bg-white">
      <div class="card-body container-fluid">
        <form action="{{url('/gantipassword')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="oldPassword">Sandi Lama</label>
            <div class="input-group">
              <input type="password" name="oldPW" class="form-control" id="oldPassword" placeholder="name@example.com" required>
              <div class="input-group-prepend" style="cursor: pointer;">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>
          <small id="confirmOldPW" class="form-text text-red mb-3 mt--3" style="color: red">Mohon Isi Sandi Saat Ini!</small>
          <div class="form-group">
            <label for="newPassword">Sandi Baru</label>
            <div class="input-group">
              <input type="password" name="newPW" class="form-control" id="newPassword" placeholder="name@example.com" required>
              <div class="input-group-prepend" style="cursor: pointer;">
                <span class="input-group-text" id="basic-addon2"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>
          <small id="confirmNewPW" class="form-text text-red mb-3 mt--3" style="color: red">Mohon Isi Sandi Baru!</small>
          <div class="form-group">
            <label for="confirmPassword">Konfirmasi Sandi</label>
            <div class="input-group">
              <input type="password" name="confirmPW" class="form-control" id="confirmPassword" placeholder="name@example.com" required>
              <div class="input-group-prepend" style="cursor: pointer;">
                <span class="input-group-text" id="basic-addon3"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>
          <small id="confirmConfirmationPW" class="form-text text-red mb-3 mt--3" style="color: red">Mohon Isi Konfirmasi Sandi!</small>
          <small id="konfirmasi" class="form-text text-red mb-3 mt--3" style="color: red">Sandi Baru dan Konfirmasi Sandi Baru tidak sama.</small>
          <!-- <input type="button" class="btn btn-primary" value="Ubah" id="submit-btn"> -->
          <button type="button" class="btn btn-primary" id="submit-btn">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('extendsScripts')
<script>
  $(document).ready(function() {
    $("#konfirmasi").css('visibility', 'hidden');
    $("#confirmOldPW").hide();
    $("#confirmNewPW").hide();
    $("#confirmConfirmationPW").hide();

    $("#basic-addon1").on('click', function(event) {
      event.preventDefault();
      if ($('#oldPassword').attr("type") == "text") {
        $('#oldPassword').attr('type', 'password');
        $('#basic-addon1 i').addClass("fa-eye-slash");
        $('#basic-addon1 i').removeClass("fa-eye");
      } else if ($('#oldPassword').attr("type") == "password") {
        $('#oldPassword').attr('type', 'text');
        $('#basic-addon1 i').removeClass("fa-eye-slash");
        $('#basic-addon1 i').addClass("fa-eye");
      }
    })
    $("#basic-addon2").on('click', function(event) {
      event.preventDefault();
      if ($('#newPassword').attr("type") == "text") {
        $('#newPassword').attr('type', 'password');
        $('#basic-addon2 i').addClass("fa-eye-slash");
        $('#basic-addon2 i').removeClass("fa-eye");
      } else if ($('#newPassword').attr("type") == "password") {
        $('#newPassword').attr('type', 'text');
        $('#basic-addon2 i').removeClass("fa-eye-slash");
        $('#basic-addon2 i').addClass("fa-eye");
      }
    })
    $("#basic-addon3").on('click', function(event) {
      event.preventDefault();
      if ($('#confirmPassword').attr("type") == "text") {
        $('#confirmPassword').attr('type', 'password');
        $('#basic-addon3 i').addClass("fa-eye-slash");
        $('#basic-addon3 i').removeClass("fa-eye");
      } else if ($('#confirmPassword').attr("type") == "password") {
        $('#confirmPassword').attr('type', 'text');
        $('#basic-addon3 i').removeClass("fa-eye-slash");
        $('#basic-addon3 i').addClass("fa-eye");
      }
    })
    $("#confirmPassword").on('input', function() {
      if ($(this).val().length > 7) {
        if ($(this).val() === $("#newPassword").val()) {
          $("#konfirmasi").css('visibility', 'hidden');
          $("#submit-btn").attr('disabled', false).css('pointer-events', 'auto');
        } else {
          $("#konfirmasi").css('visibility', 'visible');
          $("#submit-btn").attr('disabled', true).css('pointer-events', 'none');
        }
      }
    });

    $('#oldPassword').on('input', function() {
      if ($(this).val().length < 1) {
        $("#confirmOldPW").show();
        $("#submit-btn").attr('disabled', true).css('pointer-events', 'none');
      } else {
        $("#confirmOldPW").hide();
        $("#submit-btn").attr('disabled', false).css('pointer-events', 'auto');
      }
    })
    $('#newPassword').on('input', function() {
      if ($(this).val().length < 1) {
        $('#confirmNewPW').show();
        $("#submit-btn").attr('disabled', true).css('pointer-events', 'none');
      } else {
        $("#confirmNewPW").hide();
        $("#submit-btn").attr('disabled', false).css('pointer-events', 'auto');
      }
    })
    $('#confirmPassword').on('input', function() {
      if ($(this).val().length < 1) {
        $('#confirmConfirmationPW').show();
        $("#submit-btn").attr('disabled', true).css('pointer-events', 'none');
      } else {
        $("#confirmConfirmationPW").hide();
        $("#submit-btn").attr('disabled', false).css('pointer-events', 'auto');
      }
    })
  });
</script>
@endsection