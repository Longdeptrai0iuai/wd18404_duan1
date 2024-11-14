<?php
session_start();
function checkLoginAdmin(){
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !='1') {
        header('Location: /');
       exit;
    } 
}