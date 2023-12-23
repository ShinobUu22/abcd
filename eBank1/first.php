<?php
$server="localhost";
$username="root";
$password="";
$db="formfillup";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error());
$sql = "CREATE table pms(id int not null auto_increment primary key,Name varchar(255),Email varchar(255),Password varchar(255),Account_no int not null,Father_name varchar(255),Mother_name varchar(255),NID int not null,Birth_Date date,Contact varchar(255),Balance int not null);";
mysqli_query($conn,$sql);

$sql1 = "CREATE table transaction(id int not null auto_increment primary key,
                                sender varchar(255),reciever varchar(255), Balance int not null);";

mysqli_query($conn,$sql1);