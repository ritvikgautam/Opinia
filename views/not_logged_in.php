<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>SignIn</title>
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
				<span style="font-family: verdana,arial; color: #00000; font-size: 1.00em; font-weight:bold;">Enter your e-mail ID and password</span>
			</div>
			<div style="background: ; padding: 15px">
				<style type="text/css" scoped>
					td { text-align:left; font-family: verdana,arial; color: #FFFFFF; font-size: 1.00em; }
					input { border: 1px solid #21A957; border-radius: 0px; color: #666666; display: inline-block; font-size: 1.00em;  padding: 5px; width: 100%; }
					input[type="button"], input[type="reset"], input[type="submit"] { height: auto; width: auto; cursor: pointer; box-shadow: 0px 0px 5px #0361A8; float: right; margin-top: 10px; }
					table.center { margin-left:auto; margin-right:auto; }
					.error { font-family: verdana,arial; color: #D41313; font-size: 1.00em; }
				</style>
				<form method="post" action="index.php" name="loginform">
					<input type="hidden" name="action" value="login">
					<input type="hidden" name="hide" value="">
					<table class='center'>
						<tr><td>E-mail:</td><td><input id="login_input_email" class="login_input" type="text" name="user_email" required placeholder="Your@email.com"/></td></tr>
						<tr><td>Password:</td><td><input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required placeholder="Password"/></td></tr>
						<tr><td>&nbsp;</td><td> <input type="submit"  name="login" value="Log in" /></td></tr>
						<tr><td colspan=2>&nbsp;</td></tr>
						<tr><td colspan=2>Not member yet? Click <a href="register.php">here</a> to register.</td></tr>
						<br><br>
					</table>
					<br><br>
				</form>
			</div>
		</div>
	</div>
	<br><br><br>
</body>