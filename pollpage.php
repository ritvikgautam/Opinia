<?php
	session_start();
	include("db.php");
	$uemail = $_SESSION['user_email'];
	$uid = mysql_fetch_assoc(mysql_query("SELECT u_id FROM user WHERE u_email='".$uemail."';"));
	$uid = $uid['u_id'];
	$_SESSION['uid'] = $uid;
	
	if(isset($_POST['submit']))
	{
	$imp = $_POST['option'];
	$temp = $_SESSION['id'];
	$optionid = mysql_fetch_assoc(mysql_query("SELECT DISTINCT o_id from options WHERE q_id='".$temp."' and o_option='".$imp."';"));
	$optionid = $optionid['o_id'];
	$dummy=mysql_query("UPDATE options SET o_counter = o_counter + 1 WHERE o_id='".$optionid."';");

	$dummy=mysql_query("INSERT into log(u_id, q_id, o_id) VALUES('".$uid."','".$temp."', '".$optionid."');");
	haya();
	}
	include_once("header.php");
?>

<?php
			include('db.php');
			$id = mysql_fetch_assoc(mysql_query("SELECT q_id from questions order by rand() LIMIT 1;"));
			$id = $id['q_id'];
			$ques = mysql_fetch_assoc(mysql_query("SELECT q_question from questions WHERE q_id='".$id."';"));
			$ques = $ques['q_question'];
			$_SESSION['ques'] = $ques;	
			$topicid = mysql_fetch_assoc(mysql_query("SELECT t_id from category WHERE q_id='".$id."';"));
			$topicid = $topicid['t_id'];
			$topic = mysql_fetch_assoc(mysql_query("SELECT t_name from topiclist WHERE t_id='".$topicid."' LIMIT 1;"));
			$topic = $topic['t_name'];
			$option = mysql_query("SELECT DISTINCT o_option from options WHERE q_id='".$id."';");
			
			$_SESSION['id']	= $id;
			echo '<div style="float:left; margin-left:150px; margin-right:200px"><fieldset><legend>'; echo $topic;
			echo " : ";
			echo $ques .'</legend><form method="post" action="" id="form1" name="form1">'; 

						while($row = mysql_fetch_assoc($option)) 
						{
    						$yay = $row["o_option"];
							echo '<input type="radio" name="option" style="color:black" value="'.$yay.'">'.$yay.'<br>';
						}?>
						<input type="submit" name="submit" value="Vote">
						</form>
					</fieldset></div>
				</td>
				<td>
					<?php
						function haya()
						{
							$id = $_SESSION['id'];
							$result = mysql_query("SELECT o_option, o_counter FROM options WHERE q_id='".$id."';");

							$rows = array();
							while($r = mysql_fetch_array($result)) {
    							$row[0] = $r[0];
    							$row[1] = $r[1];
    							array_push($rows,$row);
							}
							file_put_contents('results.json', json_encode($rows, JSON_NUMERIC_CHECK));

							/*$result1 = mysql_query("SELECT u_id FROM user WHERE u_sex='1';");
							while($rowb = mysql_fetch_assoc($result1)){
     						foreach ($rowb as $key) {
     							$result = mysql_query("SELECT o.o_option, o.o_counter FROM options o, log l WHERE l.q_id='".$id."' and l.u_id='".$key."' and l.q_id = o.q_id;");
     							$rows = array();
							while($r = mysql_fetch_array($result)) {
    							$row[0] = $r[0];
    							$row[1] = $r[1];
    							array_push($rows,$row);
							}
							file_put_contents('result1.json', json_encode($rows, JSON_NUMERIC_CHECK));
     						}
							}*/
							#echo json_encode($json);
							/*$result = mysql_query("SELECT o_option, o_counter FROM options o, users u WHERE q_id='".$id."' ;");

							$rows = array();
							while($r = mysql_fetch_array($result)) {
    							$row[0] = $r[0];
    							$row[1] = $r[1];
    							array_push($rows,$row);
							}
							file_put_contents('results.json', json_encode($rows, JSON_NUMERIC_CHECK));*/
							/*
							$result = mysql_query("SELECT o_option, o_counter FROM options WHERE q_id='".$id."';");

							$rows = array();
							while($r = mysql_fetch_array($result)) {
    							$row[0] = $r[0];
    							$row[1] = $r[1];
    							array_push($rows,$row);
							}
							file_put_contents('results.json', json_encode($rows, JSON_NUMERIC_CHECK));
							*/
						}
					?>
					<p style="margin-top:80px">
					<iframe src="boo.php" frameborder="0" height="500px" width="500px" scrolling="no"></iframe>
				</p>
				</td>
			</tr>
		</table>
		<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_IN/sdk.js#xfbml=1&appId=729260017154531&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div>
    	 	<div class="header">
		<div class="nav_container">
			<div class="h_menu navbar-ceneter">
				<nav class="navbar navbar-default" role="navigation">
			    <!-- Brand and toggle get grouped for better mobile display -->
					<div class="fb-comments" data-href="http://example.com/comments" data-numposts="5" data-colorscheme="dark"></div>			    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    </div><!-- /.navbar-collapse -->
				</nav>
				<script src="js/classie.js"></script>
				<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>


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
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
	 		};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>



</body>