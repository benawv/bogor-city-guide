<script src="/website/static/agent-recruitment/js/jquery-1.11.3.min.js"></script>
<section class="auth">
    <div class="auth-inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-2 text-right">

                    <div class="row mb20">
                        <div class="col-xs-4 col-xs-offset-4 col-md-6 col-md-offset-6">
                            <img src="/website/static/agent-recruitment/img/logo-allianz.jpg" alt="Allianz Logo" class="auth-logo img-responsive">
                        </div>
                    </div>

                    <div class="row mb32">
                        <div class="col-xs-12 text-right">
                            <h1 class="auth-heading">Agency Recruitment System</h1>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-md-4">
                    <form role="form" class="auth-formbox" method="post" action="/dashboard">
                        <div class="form-group">
                            <input type="name" placeholder="Name" name="name" class="form-control" tabindex="1" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control" tabindex="2" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Handphone" name="phone" class="form-control" tabindex="3" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Profile" class="form-control" name="profil" tabindex="4" required rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control" tabindex="5">
                                <option value="">Select Values</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control" tabindex="6" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control" tabindex="7" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Sign Up" name="submit" tabindex="8">
                        </div>
                        <div class="form-group mb0">
                            <span class="help-block">Already have an account? <a href="/agent-recruitment/login">Sign In</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
	//Validasi name
	$('input[name="name"]').bind("input", function(){
               var re = /^[a-zA-Z\s]+$/;

                var value = $(this).val();
                $(this).val(value);
                if(!re.test(value)){
                    $(this).val('');
                }else{
                }
	}); //end validasi name
	
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
	
	// Validasi number
	$('input[name="phone"]').bind("input", function(){
        var re = /^[0-9]*$/;
		var value = $(this).val();
		$(this).val(value);
		if(!re.test(value)){
			$(this).val('');
		}else{
		}
	});// end validasi number
</script>
