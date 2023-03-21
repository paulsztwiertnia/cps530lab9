<?php include ('dbconnect.php'); ?>
<?php


$sql = "INSERT INTO Photographs (picture_number, subject, location, date_taken, picture_url) VALUES ('1000', 'Mercedes GT', 'Toronto Car Show','2019','https://imgur.com/BiTXwuY');";
if (mysqli_query($connect, $sql)) {
    echo "New photographs (1) record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Photographs (picture_number, subject, location, date_taken, picture_url) VALUES ('1001', 'Vintage Impala Converitable', 'Toronto Car Show','2019','https://imgur.com/AoaX3iN');";
if (mysqli_query($connect, $sql)) {
    echo "New photographs (2) record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Photographs (picture_number, subject, location, date_taken, picture_url) VALUES ('1002', 'Audi R8', 'Toronto Car Show','2019','https://imgur.com/AyZi9dR');";
if (mysqli_query($connect, $sql)) {
    echo "New photographs (3) record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Photographs (picture_number, subject, location, date_taken, picture_url) VALUES ('1003', 'Nissan Skyline R34', 'Castle','2013','https://imgur.com/184nLH7');";
if (mysqli_query($connect, $sql)) {
    echo "New photographs (4) record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Photographs (picture_number, subject, location, date_taken, picture_url) VALUES ('1004', 'Toyota Supra MKIV', 'Russian Highway','2013','https://imgur.com/2Euk7NG');";
if (mysqli_query($connect, $sql)) {
    echo "New photographs (5) record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Photographs (picture_number, subject, location, date_taken, picture_url) VALUES ('1005', 'Ferrari F40', 'Parking Garage','2013','https://imgur.com/Jt7o4vI');";
if (mysqli_query($connect, $sql)) {
    echo "New photographs (6) record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
$sql = "INSERT INTO Photographs (picture_number, subject, location, date_taken, picture_url) VALUES ('1006', 'Dubai PD Buggati Veyron','Dubai','2014','https://imgur.com/gUXhjTe');";
if (mysqli_query($connect, $sql)) {
    echo "New photographs (7) record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
$sql = "INSERT INTO Photographs (picture_number, subject, location, date_taken, picture_url) VALUES ('1007', 'Mercedes CLS63 Shooting Brake', 'Forrest','2019','https://imgur.com/YTzeVBs');";
if (mysqli_query($connect, $sql)) {
    echo "New photographs (8) record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
$sql = "INSERT INTO Photographs (picture_number, subject, location, date_taken, picture_url) VALUES ('1008', 'BMW M5', 'Country Road','2019','https://imgur.com/NG3awAh');";
if (mysqli_query($connect, $sql)) {
    echo "New photographs (9) record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
$sql = "INSERT INTO Photographs (picture_number, subject, location, date_taken, picture_url) VALUES ('1009', 'Audi RS6', 'Forrest','2020','https://imgur.com/WyzC5m5');";
if (mysqli_query($connect, $sql)) {
    echo "New photographs (10) record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);
?>

