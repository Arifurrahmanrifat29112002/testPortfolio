@extends('admin.auth.app')
@section('title', 'register')
    

@section('content')
<div id="app" class="app app-full-height app-without-header">
		
    <div class="register">
        
        <div class="register-content">
            <div id="show_success_alert"></div>
            <form action="" id="register_form" method="post" name="register_form">
                @csrf
                <h1 class="text-center">Sign Up</h1>
                <p class="text-inverse text-opacity-50 text-center">One Admin ID is all you need to access all the Admin services.</p>
                <div class="mb-3">
                    <label class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg bg-inverse bg-opacity-5" placeholder="Your Name">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg bg-inverse bg-opacity-5" placeholder="Enter your E-mail">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg bg-inverse bg-opacity-5" placeholder="Password">
                    <div class="invalid-feedback"></div> 
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" id="cpassword" name="cpassword" class="form-control form-control-lg bg-inverse bg-opacity-5" placeholder="Confirm Password">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck1">
                        <label class="form-check-label" for="customCheck1">I have read and agree .</label>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" value="Register" id="register_btn" class="btn btn-outline-theme btn-lg d-block w-100">Sign Up</button>
                </div>
                <div class="text-inverse text-opacity-50 text-center ">
                    Already have an Admin ID? <a class="text-decoration-none" href="/login">Sign In</a>
                </div>
            </form>
        </div>
        
    </div>
    

</div>
@endsection

@section('script')

<script>
    $(function(){
        $("#register_form").submit(function(e){
            e.preventDefault();
            $("#register_btn").val('Please Wait...');
            $.ajax({
                url: '{{ route('admin.auth.register') }}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(res){
                    if(res.status == 400){
                        showError('name', res.messages.name);
                        showError('email', res.messages.email);
                        showError('password', res.messages.password);
                        showError('cpassword', res.messages.cpassword);
                        $("#register_btn").val('Register');
                    }
                    else if(res.status == 200){
                        $("#show_success_alert").html(showMessage('success', res.messages));
                        $("#register_form")[0].reset();
                        removeValidationClasses("#register_form");
                        $("#register_btn").val('Register');
                    }
                }
            });
        });
    });
</script>
    
@endsection