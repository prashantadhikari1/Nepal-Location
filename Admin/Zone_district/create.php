<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | Add Zone District</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <?php
require_once "../connection.php";

$sql_zone = "SELECT * FROM zone";
$result_zone = mysqli_query($conn,$sql_zone);

$sql_district = "SELECT * FROM district";
$result_district = mysqli_query($conn,$sql_district);
    ?>

<?php include "../include/header.php" ?>

<div class="form">
    <form action="action_zone_district.php" method="POST">

        <label for="" class="label">Select Zone:</label>

        <select name="zone_name" class="js-example-basic-single">
            
            <?php if(mysqli_num_rows($result_zone)>0){ ?>
                <?php while($row_zone = mysqli_fetch_array($result_zone)){ ?>
                    <?php if($row_zone['status']=="active"){ ?>
                    <option value="<?php echo $row_zone['id']; ?>"> <?php echo $row_zone['zone']; ?> </option>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </select> <br> <br>

        <label for="" class="label">Select District:</label>

        <select name="district_name" class="js-example-basic-single">

            <?php if(mysqli_num_rows($result_district)>0){ ?>
                <?php while($row_district = mysqli_fetch_array($result_district)){ ?>
                    <?php if($row_district['status']=="active"){ ?>
                        
            <option value="<?php echo $row_district['id']; ?>"> <?php echo $row_district['district'];?> </option>
            
            <?php } ?>
            <?php } ?>
            <?php } ?>
        </select> <br><br>

        <span id="name">Status:</span>
        <label for="">Active</label>
        <input type="radio" name="status" id="" value="active">
        <label for="">Inactive</label>
        <input type="radio" name="status" id="" value="inactive">
         <br>
        <button type="submit" class="submit">submit</button>
    </form>
    </div>
</body>
</html>