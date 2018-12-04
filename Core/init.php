<?php 
include 'database/connection.php';
include 'classes/User.php';
include 'classes/Post.php';
include 'classes/Follow.php';

global $pdo; // om toegang te hebben tot connection.php

session_start();
$getFromU = new User($pdo);// define new object voor de class
$getFromP = new Post($pdo);
$getFromF = new Follow($pdo);

define("BASE_URL","http://localhost/inspiration-warrior?");
?>