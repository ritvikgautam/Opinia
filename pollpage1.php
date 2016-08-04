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
?>
<html>
	<head>
			<title> Poll Page </title>
	</head>
	<body>
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
			echo '<table>';
			echo '<tr><td>Category :'; echo $topic .'</td></tr>';
			echo '<tr><td>Question :'; echo $ques .'<br><form method="post" action="">'; 

						while($row = mysql_fetch_assoc($option)) 
						{
    						$yay = $row["o_option"];
							echo '<input type="radio" name="option" value="'.$yay.'">'.$yay.'<br>';
						}?>
						<input type="submit" name="submit" value="Vote">
						</form>
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
					<iframe src="boo.php" frameborder="0" height="500px" width="500px" scrolling="no"></iframe>
				</td>
			</tr>
		</table>
	</body>
</html>