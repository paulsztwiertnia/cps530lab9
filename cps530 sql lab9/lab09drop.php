<?php include ('dbconnect.php'); ?>

<?php 

$sql = "DROP TABLE Photographs";

if (mysqli_query($connect, $sql)) {
    echo "Table Photographs Dropped.<br>";
} else {
    echo "Error: " . $sql . "=>" . mysqli_error($connect);
}

mysqli_close($connect);
?>