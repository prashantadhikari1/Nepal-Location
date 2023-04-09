<?php
include "../include/header.php";
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Loaction | ChangePw</title>
    <link rel="stylesheet" href="../style/form.css">
</head>
<body>
    <div class="form-reg">
            <form action="updatePw.php?id=<?php echo $id ?>" method="POST">
                    <h3>Change Password</h3>
            
                    <input type="password" name="password" class="text-style-reg" placeholder="New Password"> <br>
                
                <input type="password" name="cpassword" class="text-style-reg" placeholder="Confirm New Password" required><br>
                <?php if(isset($_SESSION['upUsersPwError'])) echo $_SESSION['upUsersPwError'];?> <br>
                <div class="d-flex justify-content-center">
                    <button type="submit" id="register-btn">Confirm</button>
                </div>
            </form>
    </div>
</body>
</html>
<?php
unset($_SESSION['upUsersPwError']);
?>