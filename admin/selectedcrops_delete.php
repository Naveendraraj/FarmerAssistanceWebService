<?php include("db.php"); ?>
<?php
$id = $_REQUEST['id'];
$getimage = mysql_query("SELECT * FROM selectedcrops_details WHERE id = '".$id."'");
while($row = mysql_fetch_array($getimage))
{
  $image = $row['id'];
}
unlink("$image");
		
mysql_query("DELETE FROM selectedcrops_details WHERE id ='$id'");
header('location:selectedcrops.php');
?>