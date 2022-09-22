<?php
session_start();
$islogged = isset($_COOKIE['email']);

if(!$islogged){
    header('location: index.php');
}
else{
    echo 'welcome';
}
?>