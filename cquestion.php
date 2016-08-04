<?php
	include_once("header.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Create a Poll</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="poll.css" rel="stylesheet">
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
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
<style type="text/css">
	body{ 
		font-family:Tahoma, Geneva, sans-serif;
		font-size:18px;
	}
	.content{
		width:900px;
		margin:0 auto;
	}
	#searchid
	{
		width:500px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:500px;
		padding:10px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
		font-size:15px; 
		height:50px;
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
</style>

<script>
function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 5){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum options per question is 5");
			   
	}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Cannot Remove all the Passenger.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}
</script>
</head>
<body>
	<div id="blog" class="blog">
		<div class="container">
			<div class="head-one text-center team-head">
				<h3>Create A Poll</h3>
				<hr>
			</div>	
		</div>
	</div>
	<div id="contact" class="contact">
		<div class="container">
			<div class="head-contact text-center">
				<div style="background: ; padding: 15px; text-align: center;">
					<style type="text/css" scoped>
						td { text-align:left; font-family: verdana,arial; color: #FFFFFF; font-size: 1.00em; }
						input { border: 1px solid #21A957; border-radius: 0px; color: #666666; display: inline-block; font-size: 1.00em;  padding: 5px; width: 50%; }
						input[type="button"], input[type="reset"], input[type="submit"] { height: auto; width: auto; cursor: pointer; box-shadow: 0px 0px 5px #0361A8; float: right; }
						table.center { margin-left:auto; margin-right:auto; }
						.error { font-family: verdana,arial; color: #D41313; font-size: 1.00em; }
					</style>
					<form method="POST" action="add_topic.php">
						<input type="submit" class="search" name="new_topic_submit" value="Add" style="float:right">
						<input type="text" name="new_topic" class="search" autocomplete="off" placeholder="Add a new topic" style="width:14%; float:right"><br>
						
					</form>
					<form method="POST" action="savequestion.php">
					<div class="content">
							<input type="text" class="search" id="searchid" placeholder="Search for topic" name="topic" autocomplete="off"/>
					<div id="result">
					</div>
					</div>
						<br><br>

						<input placeholder="Enter question" type="text" name="input_question" class="search" autocomplete="off"><br><br>
					</div>
						<label for="input_options" hidden="yes"> Enter options </label>
					 
						<input type="button" value="Add Option" class="search" onClick="addRow('dataTable')" style="float:left"/> 
						<!-- <input type="button" value="Remove Option" onClick="deleteRow('dataTable')" /> <br> -->
						<br><br>
						<table id="dataTable" class="form" border="0">
					 	<tbody>
					  	<tr>
						<td>
							<input type="text" name="option[]" autocomplete="off" style="width:100%">
						</td>
						</tr>
						</tbody>
						</table>
					<br><br>
						<input type="submit" style="float:left" value="Create Poll">
					
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include_once("footer.php"); ?>