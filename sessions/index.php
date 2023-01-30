<?php
//if(session_status() !== PHP_SESSION_ACTIVE) session_start();
// or
//if(session_status() === PHP_SESSION_NONE) session_start();

session_start(); ?>
<?php
if(isset($_POST['uname']) && isset($_POST['pswd'])) {
    if('student-cs' === $_POST['uname'] &&  'pswd-cs' === $_POST['pswd']){
        $_SESSION['LOGGED_USER'] = $_POST['uname'];
    }
    else {
        $errMsg = $_POST['uname'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Session example</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    >
</head>
<body>
<p>Examples using sessions <br />
    <?php if(isset($errMsg)): ?>
    <div class="alert alert-danger" role="alert" >
        <?php echo "Utilisateur : ".$errMsg." non trouvé"; ?>
    </div>
    <?php  endif;  ?>
<?php if(!isset($_SESSION['LOGGED_USER'])) { ?>
    <form action="index.php" method="post">

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pswd" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
<?php } else{
                echo "<br />Bienvenue à nouveau : ". $_SESSION['LOGGED_USER'];
                echo "<br />Session ID : ". session_id();
                echo "<br />Session name : ". session_name();
                echo "<br />Session status : ". session_status();

            } ?>

</p>
</body>
</html>