<!DOCTYPE HTML>
<?php include ('dbconnect.php'); ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
  <h1>List of photographs</h1>
  <h2>BMW M5</h2>
  <br>
    <table class="table">
      <thead>
        <tr>
          <th>Picture number</th>
          <th>Subject</th>
          <th>Location</th>
          <th>Date Taken</th>
          <th>Picture URL</th>
        </tr>
      </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM Photographs WHERE subject='BMW M5';";
            $result = mysqli_query($connect, $sql);
            
            if (!$result) {
                die("invalid query: " . $connection->error);
            }
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>" . $row["picture_number"] . "</td>
                    <td>" . $row["subject"] . "</td>
                    <td>" . $row["location"] . "</td>
                    <td>" . $row["date_taken"] . "</td>
                    <td>" . $row["picture_url"] . "</td>
                </tr>";
            }
            
            mysqli_close($connect);
            ?>
        </tbody>
    </table>
    <img src=BMWM5.jpg width="800" height="600">
</body>
</html>




  


