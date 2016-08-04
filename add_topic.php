<?php
	if(isset($_POST['new_topic_submit']))
	{
		include('db.php');
		$topic=$_POST['new_topic'];
		mysql_query("INSERT into topiclist(t_name) VALUES('".$topic."');");
	}
	header('Location: cquestion.php');
?>