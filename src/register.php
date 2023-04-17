
<!DOCTYPE html >
<html lang="en">
<body onload="login_show()">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<?php include("assets/components/meta.php")?>
 <?php include("assets/components/sidebar.php") ?>
<div class="login" id="login">
    <div class="body_login">
        <div class="form">
            <h2>Signup</h2>
            <form action="./functions/register_validate.php" method="post">
            <div class="input">
                <div class="inputBox">
                    <label for="">Username</label>
                    <input type="text">
                </div>
                <div class="inputBox">
                    <label for="">Password</label>
                    <input type="password">
                </div>
                <div class="inputBox">
                    <input type="submit" name="" value="Sign In"> 
                </div>
            </div>
            <form>
            <p class="forgot">Alredy Have An Account <a href="#">Click Here</a></p>
            <div class="social">
            <button><i class="fa fa-facebook" aria-hidden="true"></i><p>Signin with Facebook</p></button>
                <button><i class="fa fa-google" aria-hidden="true"></i><p>Signin with Gooogle</p></button>
            </div>
        </div>
</div></div>

</body>

<?php include("assets/components/footer.php")?>

<?php include("assets/components/scripts.php")?>