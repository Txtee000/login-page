<?php 
    //Connection
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db"; //name of file database
    
    //create Connection
    $conn = mysqli_connect($severname , $username , $password , $dbname);
    
    //check connection
    if(!$conn) {
        die("Connection fail" . mysqli_connect_error()); 
    }
    

?>