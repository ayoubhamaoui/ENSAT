<?php

//start session
session_start();


// Include Config
require('config.php');


//Creation de la base de donnee

$link= mysqli_connect(DB_HOST,DB_USER,DB_PASS);
if(mysqli_connect_errno())
{
	printf("echec de connection:%s\n",mysqli_connect_error());
	exit();
}

/*
//supprimer la base si deja existe nln
$querydrop="DROP DATABASE IF EXISTS ensat";
$resultdrop=mysqli_query($link,$querydrop);
*/


//creation a nouveau
$query="CREATE DATABASE IF NOT EXISTS ensat";
$result=mysqli_query($link,$query);


//connexion avec la base ensat
mysqli_select_db($link,'ensat');


//requete des tables
$query1="CREATE Table  eleves (
ID_Eleve INT(11) NOT NULL AUTO_INCREMENT ,
CNE INT(11) NOT NULL ,
name VARCHAR(255) NOT NULL ,
password VARCHAR(255) NOT NULL,
email VARCHAR(255) ,
club VARCHAR(45) ,
PRIMARY KEY (ID_Eleve),
UNIQUE (email )) ENGINE = MyISAM;";

$query2="CREATE TABLE admins
(
	ID_Admin INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) ,
    password VARCHAR(100),
		name VARCHAR(100),
		UNIQUE (email)
)";

$query3="CREATE TABLE shares
(
 id INT PRIMARY KEY AUTO_INCREMENT,
 title VARCHAR(255) NOT NULL,
 body TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
 link VARCHAR(255) NOT NULL,
 create_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 user_id INT(25))";

 $query4="CREATE TABLE clubs
 (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
	email VARCHAR(100) ,
	numero varchar(10),
	club varchar(45),
	name varchar(25),
  body TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  create_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP)";

$result1=mysqli_query($link,$query1);
$result2=mysqli_query($link,$query2);
$result3=mysqli_query($link,$query3);
$result4=mysqli_query($link,$query4);


//requete d'ajout d'un admin

$queryAdmin="INSERT INTO admins (email, password) VALUES ('ensat@ensat.ac.ma','ensat')";
$result=mysqli_query($link,$queryAdmin);

mysqli_close($link);

//page

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');
require('controllers/about.php');
require('controllers/membres.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');
require('models/about.php');
require('models/membres.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}
