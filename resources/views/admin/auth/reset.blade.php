@extends('admin.auth.app')

@section('title', 'change password')
    

@section('content')
<div id="app" class="app app-full-height app-without-header">
		
    <div class="login">
        <div class="login-content">
            <div id="reset_alert"></div>
            <form action="" id="reset_form" method="post"  name="login_form">
                @csrf
                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="token" value="{{ $token }}">
                <h1 class="text-center"> Login </h1>
                <div class="mb-3">
                    <input type="email" id="email" name="email" class="form-control form-control-lg bg-inverse bg-opacity-5" placeholder="E-mail" value="{{ $email }}" disabled>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <input type="password" id="npass" name="npass" class="form-control form-control-lg bg-inverse bg-opacity-5" placeholder="New Password">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <input type="password" id="cnpass" name="cnpass" class="form-control form-control-lg bg-inverse bg-opacity-5" placeholder="Confirm New Password">
                    <div class="invalid-feedback"></div>
                </div>
                <button type="submit" value="Reset Password" id="forgot_btn" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3"></button>
                <input type="submit" value="Update Password" id="reset_btn" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">
            </form>
        </div>
        
    </div>
</div>
@endsection

@section('script')
<script>
$(function(){
    $("#reset_form").submit(function(e){
        e.preventDefault();
        $("#reset_btn").val("Please Wait...");
        $.ajax({
            url: '{{ route('admin.auth.reset') }}',
            method: 'post',
            data: $(this).serialize(),
            // dataType: 'json',
            success: function(res){
                if(res.status == 400){
                    showError('npass', res.messages.npass);
                    showError('cnpass', res.messages.cnpass);
                    $("#reset_btn").val('Update Password');
                }
                else if(res.status == 401){
                    $("#reset_alert").html(showMessage('danger', res.messages));
                    removeValidationClasses('#reset_form');
                    $("#reset_btn").val('Update Password');
                }
                else{
                    $("#reset_form")[0].reset();
                    $("#reset_alert").html(showMessage('success', res.messages));
                    $("#reset_btn").val('Update Password');
                }
            }

        });
    });
});
</script>
@endsection