<?php
$host="cdbinfo17.db.9779691.hostedresource.com";
$user="cdbinfo17";
$password="Natedave17!";
$database="cdbinfo17";

$cxn=mysqli_connect($host,$user,$password,$database) or die (mysqli_error());
$selectDb=mysqli_select_db($cxn,$database) or die (mysqli_error());

    //$host="localhost";
    //$user="root";
    //$password="";
    //$db="hisCreations";
    //$cxn=mysqli_connect($host,$user,$password,$db) or die(error());
    //$select_db=mysqli_select_db($cxn,$db);
?>