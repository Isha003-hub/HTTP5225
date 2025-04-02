<?php
$connect = mysqli_connect('localhost', 'root', '','http5225assignment1');
if(!$connect)
{
    echo 'error: ' .mysqli_connect_error();
    exit;
}
?>