<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbemail = "";
$dbname = "connectiondb";

if(! $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbemail,$dbname))
{
  die("failed to connect!")
}
