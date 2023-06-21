@extends('admin.auth.app')

@section('title', 'forgot password')
    

@section('content')
<div id="app" class="app app-full-height app-without-header">
		
    <div class="login">
        <div class="login-content">
            <div id="forgot_alert"></div>
            <form action="" id="forgot_form" method="post"  name="login_form">
                @csrf
                <h1 class="text-center"> Forgot Password?</h1>
                <div class="text-inverse text-opacity-50 text-center mb-4">
                    Enter your e-mail address below to reset your password.
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="">
                    <div class="invalid-feedback"></div>
                </div>
                <input type="submit" value="Reset Password" id="forgot_btn" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(function(){
    $("#forgot_form").submit(function(e){
        e.preventDefault();
        $("#forgot_btn").val('Please Wait...');
        $.ajax({
            url: '{{ route('admin.auth.forgot') }}',
            method: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res){
                if(res.status == 400){
                    $("#forgot_alert").html(showError('email', res.messages.email));
                    $("#forgot_btn").val("Reset Password");
                }
                else if(res.status == 200){
                    $("#forgot_alert").html(showMessage('success', res.messages));
                    $("#forgot_btn").val("Reset Password");
                    removeValidationClasses("#forgot_form");
                    $("#forgot_form")[0].reset();
                }
                else{
                    $("#forgot_btn").val("Reset Password");
                    $("#forgot_alert").html(showMessage('danger', res.messages));
                }
            }
        });
    });
});
</script>
@endsection