<?php  
 //require "init.php";  

 $name = $_POST["name"]; 

 $db_name = "testDb";  
 $mysql_user = "root";  
 $mysql_pass = "";  
 $server_name = "localhost";  
 $con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name); 
   

 //$sql_query = "insert into tbldb values('$name')";
 //$sql = "INSERT INTO tbldb (name) VALUES ('Peter1234')";
 $sql = "INSERT INTO tbldb (name) VALUES ('$name')";
mysqli_query($con,$sql);
 ?>