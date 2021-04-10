<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "yc_kicks";

$con = mysqli_connect($server,$user,$password,$db);
if($con)
{
    print_r("Connection vacha yr");
}
else
{
    print_r("vachaina yr");

}