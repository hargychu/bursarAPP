<?php
if(!mysql_connect("localhost","root",""))
{
	die('Oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("mydb"))
{
	die('Oops database selection problem ! --> '.mysql_error());
}

?>