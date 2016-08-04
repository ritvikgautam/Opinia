<!DOCTYPE HTML>

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
	<div class="footer">
		<div class="container">
			<div class="footer-icons">
				<ul class="t-social unstyled-list list-inline">
					<li><a class="twitter" href="#"><span> </span></a></li>
					<li><a class="fb" href="#"><span> </span></a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="copy-right">
				<p>Website managed and developed by &nbsp;<a href="http://w3layouts.com">Dholu - Bholu</a></p>
			</div>								
		</div>
		<div class="clearfix"> </div>
	</div>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>