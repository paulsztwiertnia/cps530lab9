<!DOCTYPE HTML>
<?php include ('dbconnect.php'); ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="margin: 30px;">
    <h2>Select Photographs:</h2>
    <form method="post" action="lab09d.php">
        <strong>Location</strong>

        <input type="checkbox" id="loc1" name="loc1" value="forrest">
        <label for="loc1"> Forrest</label>

        <input type="checkbox" id="loc2" name="loc2" value="toronto">
        <label for="loc2"> Toronto</label>

        <input type="checkbox" id="loc3" name="loc3" value="country">
        <label for="loc3"> Country Road</label>

        <input type="checkbox" id="loc4" name="loc4" value="dubai">
        <label for="loc4"> Dubai</label>

        <input type="checkbox" id="loc5" name="loc5" value="castle">
        <label for="loc5"> Castle</label>

        <input type="checkbox" id="loc6" name="loc6" value="russia">
        <label for="loc6"> Russia</label>

        <input type="checkbox" id="loc7" name="loc7" value="garage">
        <label for="loc7"> Garage</label>
        <br><br>
        <strong>Date</strong>

        <input type="checkbox" id="date1" name="date1" value="2020">
        <label for="date1"> 2020</label>

        <input type="checkbox" id="date2" name="date2" value="2019">
        <label for="date2"> 2019</label>

        <input type="checkbox" id="date3" name="date3" value="2014">
        <label for="date3"> 2014</label>

        <input type="checkbox" id="date4" name="date4" value="2013">
        <label for="date4"> 2013</label>
        <br><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
