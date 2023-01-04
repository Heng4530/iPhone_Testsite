<?php
include_once 'db1.php';
if(isset($_POST['Submit']))
{    
     $Email = $_POST['Email'];
     $Password = $_POST['Password'];
     $sql = "INSERT INTO tblogin (Email,Password) VALUES ('$Email','$Password')";
     if(mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } 
     else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>