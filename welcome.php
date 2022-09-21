<?php
session_start();
$islogged = isset($_SESSION['user']);

if(!$islogged){
    echo "Error";
}
else{
    echo "welcome";

}
?>