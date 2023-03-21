<?php include ('dbconnect.php'); ?>

<?php 
$sql = "CREATE TABLE Photographs (
    picture_number    INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    subject  VARCHAR(50) NOT NULL, 
    location  VARCHAR(50) NOT NULL, 
    date_taken  VARCHAR(20) NOT NULL,
    picture_url VARCHAR(50) NOT NULL
    ); ";
    
 if (mysqli_query($connect, $sql)) {
     echo "New table Photographs created successfully.<br>";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($connect);
 }

