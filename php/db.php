<?php



function CreateDb(){
    $servername = "localhost:3307";
    $username = "root";
    $password = "root";
    $dbname = "book";

    // create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check Connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "
                        CREATE TABLE IF NOT EXISTS books(
                            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            book_name VARCHAR (25) NOT NULL,
                            book_publisher VARCHAR (20),
                            book_price FLOAT 
                        );
        ";
        if(mysqli_query($con,$sql))
        {

        return $con;
      }
        else
    {
            echo"table created failed".mysqli_error($con);
    }
    }
    else {
       echo "error creating database";
    }
}


?>
