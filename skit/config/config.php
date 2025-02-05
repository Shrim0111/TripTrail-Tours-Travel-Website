<?php
session_start();
$siteUrl='http://'.$_SERVER['HTTP_HOST'].'/skit/main';
$SiteTitle="Travel";
//DATA BASE//
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='skit_db';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
	die('Database connection error!');
}