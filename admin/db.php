<?php
   
  $link=mysql_connect("localhost","root","");
  if(!$link)
	{
		die("Could not connect to MySQL".mysql_error());
	}
  mysql_select_db("agriculture",$link)or die ("could not open database");

?>