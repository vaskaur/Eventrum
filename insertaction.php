<?php
mysql_connect("localhost","root","");
mysql_select_db("project");
$a=$_POST['mname'];
$c=$_POST['email'];
$e=$_POST['phone'];
$f=$_POST['message'];
$b= "insert into contact (MName,email,phone,message) values ('$a','$c',$e,'$f')";
$mm=mysql_query($b);
if($mm==1)
{
header("location:contacts.php?msz=insert sucessful");
}
else
{
header("location:contacts.php?msg=insert fail");
}
?>