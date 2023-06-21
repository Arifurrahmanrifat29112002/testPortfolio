@extends('admin.auth.app')

@section('title', 'login')
    

@section('content')
<div id="app" class="app app-full-height app-without-header">
    <div class="login">
        <div class="login-content">
            <div id="login_alert"></div>
            <form action="" id="login_form" method="post" name="login_form">
                @csrf
                <h1 class="text-center">Sign In</h1>
                <div class="text-inverse text-opacity-50 text-center mb-4">
                    For your protection, please verify your identity.
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="Enter Your E-mail">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="Password">
                    <div class="invalid-feedback"></div> <br>                  
                    <a href="/forgot-pass" class="ms-auto text-inverse text-decoration-none text-opacity-50">Forgot password?</a>  
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck1">
                        <label class="form-check-label" for="customCheck1">Remember me</label>
                    </div>
                </div>
                <button type="submit" value="Login" id="login_btn" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
                <div class="text-center text-inverse text-opacity-50">
                    Don't have an account yet? <a href="/register" class="text-decoration-none" >Sign up</a>.
                </div>
            </form>
        </div>
        
    </div>
</div>
@endsection

@section('script')
<script>
    $(function(){
        $("#login_form").submit(function(e){
            e.preventDefault();
            $("#login_btn").val('Please Wait...');
            $.ajax({
                url: '{{ route('admin.auth.login') }}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(res){
                    if(res.status == 400){
                        showError('email', res.messages.email);
                        showError('password', res.messages.password);
                        $("#login_btn").val('Login');
                    }
                    else if (res.status == 401){
                        $("#login_alert").html(showMessage('danger', res.messages));
                        $("#login_btn").val('Login')
                    }
                    else {
                        if (res.status == 200 && res.messages == 'success'){
                            window.location = '{{ route('admin') }}';
                        }
                    }
                }

            });
        });
    });
</script>
    
@endsection