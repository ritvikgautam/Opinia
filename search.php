<?php
include('db.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select t_name from topiclist where t_name like '%".$q."%' LIMIT 5;");
while($row=mysql_fetch_array($sql_res))
{
$name=$row['t_name'];
?>
<div class="show" align="left">
<span class="name"><?php echo $name; ?></span><br/>
</div>
<?php
}
}
?>
