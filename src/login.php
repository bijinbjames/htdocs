<?php
require_once './functions/config.php';
if(isset($_SESSION['userData'])){
	header('location: view.php');
}
$loginURL="";
$authUrl = $googleClient->createAuthUrl();
$loginURL = filter_var($authUrl, FILTER_SANITIZE_URL);
?>
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
            <h2>Login</h2>
            <div class="col">
    
        <a href="<?= htmlspecialchars( $loginURL ); ?>" class="google btn4"><i class="fa fa-google fa-fw">
          </i> Login with Google
        </a>
      </div>
         
    
        </div>
</div></div>

</body>

<?php include("assets/components/footer.php")?>

<?php include("assets/components/scripts.php")?>