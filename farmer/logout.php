<?php
session_start();
if(session_destroy())
{
//header("Location:../index.php");
     header("Refresh:0; url=../index.php");
}
?>

