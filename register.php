<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
include_once("header.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
	$(function() {
    $( "#datepicker" ).datepicker();
    });
	</script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/hover.css" />
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Image overlay hover effects with CSS3 transitions. When we hover over an image, a neat transition will occur." />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- webfonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<!-- webfonts -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <link href="poll.css" rel="stylesheet">
</head>

<body>		 
	<br>
	<div style="text-align: center;">
		<div style="box-sizing: border-box; display: inline-block; width: 720px; max-width: 720px; background-color: #21A957; border: 2px solid #F5D74D; border-radius: 0px; box-shadow: 0px 0px 8px #f5d74d; margin: 50px auto auto;">
			<div style="background: #F5D74D; border-radius: 5px 5px 0px 0px; padding: 15px;">
				<span style="font-family: verdana,arial; color: #00000; font-size: 1.00em; font-weight:bold;">Create an account</span>
			</div>
			<div style="background: ; padding: 15px">
				<style type="text/css" scoped>
					td { text-align:left; font-family: verdana,arial; color: #FFFFFF; font-size: 1.00em; }
					input { border: 1px solid #21A957; border-radius: 0px; color: #666666; display: inline-block; font-size: 1.00em;  padding: 5px; width: 100%; }
					input[type="button"], input[type="reset"], input[type="submit"] { height: auto; width: auto; cursor: pointer; box-shadow: 0px 0px 5px #0361A8; float: right; margin-top: 10px; }
					table.center { margin-left:auto; margin-right:auto; }
					.error { font-family: verdana,arial; color: #D41313; font-size: 1.00em; }
				</style>
				<form method="post" action="register.php" name="registerform">
					<input type="hidden" name="action" value="login">
					<input type="hidden" name="hide" value="">
					<table class='center'>

					<!--<tr><td>Name:</td><td><input type="text" class="textbox" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></td></tr>-->

						<tr><td>First Name:</td><td><input placeholder="First name" id="login_input_fname" class="login_input" type="text" name="user_fname" required></td></tr>
						<tr><td>Last Name:</td><td><input placeholder="Last name" id="login_input_lname" class="login_input" type="text" name="user_lname" required></td></tr>
						<tr><td>E-mail:</td><td><input placeholder="Your@email.com" id="login_input_email" class="login_input" type="email" name="user_email" required /></td></tr>
						<tr><td>Password:</td><td><input placeholder="Password" id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /></td></tr>
						<tr><td>Confirm Password:</td><td><input placeholder="Password" id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /></td></tr>
						<tr><td>Date of Birth:</td><td><input placeholder="Date of birth" type="date" id="login_input_date" class="login_input" name="user_dob" required></td></tr>
						<tr><td>Gender:</td><td><input type="radio" class="login_input" name="user_sex" id="login_input_sex" value="0">Male<input type="radio" class="login_input" name="user_sex" id="login_input_sex" value="1">Female</td></tr>
						<tr><td>City/town:</td><td><input placeholder="City" type="text" id="login_input_city" class="login_input" name="user_city" required></td></tr>
						<tr><td>Country:</td><td><select size="1" name="user_country" id="user_country" required> 
        				<option selected value="India">India</option>
    					</select></td></tr>

						<tr><td>&nbsp;</td><td><input type="submit" value="register" name="register"></td></tr>
						<tr><td colspan=2>&nbsp;</td></tr>
						<br><br>
					</table>
					<br><br>
				</form>
			</div>
		</div>
	</div>
	<br><br><br>
</body>
<?php include_once("footer.php") ?>