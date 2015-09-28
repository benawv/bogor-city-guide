<section class="auth">
    <div class="auth-inner">
        <div class="container">
            <div class="row mb20">
                <div class="hidden-xs hidden-sm col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5 text-center">
                    <img src="/website/static/agent-recruitment/img/logo-allianz.jpg" alt="Allianz Logo" class="auth-logo img-responsive">
                </div>
            </div>
            <div class="row mb32">
                <div class="col-xs-12 text-center">
                    <h1 class="auth-heading">Agency Recruitment System</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <form role="form" class="auth-formbox" method="post" action="/agent-recruitment/dashboard">
                        <div class="form-group">
                            <input type="email" placeholder="johndoe@example.com" name="email" class="form-control" tabindex="1" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control" name="password" tabindex="2" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Login" tabindex="3">
                        </div>
                        <div class="form-group mb0">
                            <span class="help-block">Don't have an account? <a href="/agent-recruitment/sign-up">Sign up</a></span>
                        </div>
                    </form>
                    <p class="text-center">
                        <a href="#" class="auth-link">Forgot Password?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="/website/static/agent-recruitment/js/jquery-1.11.3.min.js"></script>
<script>
	//Validasi email
	 $('input[name="email"], input[name="email"]').focusout(function(){
		var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		var value = $(this).val();
		$(this).val(value);
		if(testEmail.test(value)){
			$(this).val(value);
		}else{
		  //$(this).find(".with-errors").append('<ul class="list-unstyled"><li>Email not valid.</li></ul>');
		  $(this).val('');
		}
	}); // end validasi email
</script>