<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Page example of POST</title>
    </head>
<body>
    <!-- The filename of the currently executing script, relative to the document root -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw">

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
    <?php
        //Test si la variable super global $_POST est non vide
        if (!empty($_POST)){
            /*  GET DATA SENT FROM FORM */
            extract($_POST);
            //$psw2 = $_POST['$psw'] ?? 'No password provided';
            echo '<p>Your login is : '.$uname.' and your password is :'.htmlspecialchars($psw).'</p>';
            unset($_POST);
           // var_dump($_POST);
        }
    ?>
    

</body>
</html>