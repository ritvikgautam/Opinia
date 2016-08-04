<?php
	include('db.php');
    if(isset($_POST)==true && empty($_POST)==false){ 
	$options=$_POST['option'];        
	

		$question=$_POST['input_question'];
		$dummy=mysql_query("INSERT INTO questions(q_question) VALUES('".$question."');");

		$qidarr=mysql_fetch_assoc(mysql_query("SELECT q_id from questions WHERE q_question='".$question."';"));
		$qid=$qidarr['q_id'];
		$topicarr=mysql_fetch_assoc(mysql_query("SELECT t_id from topiclist WHERE t_name='".$_POST['topic']."'"));
		$tid=$topicarr['t_id'];
		$dummy=mysql_query("INSERT INTO category VALUES('".$tid."', '".$qid."');");

		foreach($options as $a => $b){
			mysql_query("INSERT INTO options(q_id, o_option) VALUES('".$qid."', '".$options[$a]."');");
	}
	header('Location: index.php');
}				
?>