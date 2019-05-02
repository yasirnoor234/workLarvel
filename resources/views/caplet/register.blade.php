<!DOCTYPE html>
<html lang="en">
<head>
@include('caplet.layouts.head')
    
</head>
<body class="full-lg">

<div id="main">
		<div class="container">
				<div class="row">
						<div class="col-lg-12">
						
								<div class="account-wall">
										<section class="align-lg-center">
										<div class="site-logo"></div>
										<h1 class="login-title"><span>SIGNUP</span> <small> CAPLET   Admin HTML Themes Version 1.1.3</small></h1>
										</section>

										@if(Session::has('success'))
										<div class="row">
											<div class="col-md-12">
												<div class="alert alert-success">
													{{ Session::get('success') }}
												</div>
											</div>
										</div>
										@endif

										<form action="register_action" class="form-signin" method="POST">

											<input type="hidden" name="_token" value="{{csrf_token()}}">
												<section>
														<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-user"></i></div>
																<input  type="text" class="form-control" name="email" placeholder="Email">
																@if($errors->has('email'))  <p class="help-block" style="color:red"><span class="glyphicon glyphicon-exclamation-sign" style="color:red" aria-hidden="true"></span>{{ $errors->first('email')}}</p> @endif
														</div>
														<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-key"></i></div>
																<input type="text" class="form-control"  name="username" placeholder="Username">
																@if($errors->has('username')) <p class="help-block" style="color:red"><span class="glyphicon glyphicon-exclamation-sign" style="color:red" aria-hidden="true"></span>{{ $errors->first('username')}}</p> @endif
														</div>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-user"></i></div>
															<input  type="text" class="form-control" name="fullname" placeholder="Fullname">
															@if($errors->has('fullname')) <p class="help-block" style="color:red"><span class="glyphicon glyphicon-exclamation-sign" style="color:red" aria-hidden="true"></span>{{ $errors->first('fullname')}}</p> @endif
														</div>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-user"></i></div>
															<input  type="text" class="form-control" name="lastname" placeholder="Lastname">
															@if($errors->has('lastname')) <p class="help-block" style="color:red"><span class="glyphicon glyphicon-exclamation-sign" style="color:red" aria-hidden="true"></span>{{ $errors->first('lastname')}}</p> @endif
														</div>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-lock"></i></div>
															<input  type="password" class="form-control" name="password" placeholder="Password">
															@if($errors->has('password')) <p class="help-block" style="color:red"><span class="glyphicon glyphicon-exclamation-sign" style="color:red" aria-hidden="true"></span>{{ $errors->first('password')}}</p> @endif
														</div>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-lock"></i></div>
															<input  type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
															@if($errors->has('cpassword')) <p class="help-block" style="color:red"><span class="glyphicon glyphicon-exclamation-sign" style="color:red" aria-hidden="true"></span>{{ $errors->first('cpassword')}}</p> @endif
														</div>
													<button class="btn btn-lg btn-theme-inverse btn-block" type="submit">Sign Up</button>
												</section>
												<section class="clearfix">
														<div class="iCheck pull-left"  data-color="red">
														<input type="checkbox" checked>
														<label>Remember</label>
														</div>
														<a href="#" class="pull-right help">Forget Password? </a>
												</section>		
												<span class="or" data-text="Or"></span>
												<button class="btn btn-lg  btn-inverse btn-block" href="{{URL::to('caplet/login')}}" type="submit"> Login </button>
										</form>
										<a href="#" class="footer-link">&copy; 2019 ziceinclude &trade; </a>
								</div>	
								<!-- //account-wall-->
								
						</div>
						<!-- //col-sm-6 col-md-4 col-md-offset-4-->
				</div>
				<!-- //row-->
		</div>
		<!-- //container-->
		
</div>
<!-- //main-->

		
</div>
<!-- //wrapper-->


<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->


@include('caplet.layouts.footer')
    
<script type="text/javascript">
$(function() {
		   //Login animation to center 
			function toCenter(){
					var mainH=$("#main").outerHeight();
					var accountH=$(".account-wall").outerHeight();
					var marginT=(mainH-accountH)/2;
						   if(marginT>30){
							   $(".account-wall").css("margin-top",marginT-15);
							}else{
								$(".account-wall").css("margin-top",30);
							}
				}
				toCenter();
				var toResize;
				$(window).resize(function(e) {
					clearTimeout(toResize);
					toResize = setTimeout(toCenter(), 500);
				});
				
			  
				
			
	});
</script>
</body>
</html>