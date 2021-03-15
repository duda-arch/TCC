<?php 
include @$pg = $_GET["pd"];
session_start(); 

echo $_SESSION['produtos'][$_GET['pd']]["NOME"];