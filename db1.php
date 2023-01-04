<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname= 'dbbtlibraryb4e';
   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if(!$conn){
     die('fail connect' .mysqli_error()) ;
   }
    
?>