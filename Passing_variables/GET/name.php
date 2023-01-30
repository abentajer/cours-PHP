<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Page example of GET</title>
    </head>
<body>
    <p>Passing variables in Links :
    <?php
        // Example 1 : Direct call from URL
        $name = $_GET['name'];
        echo '<p>Hello <strong>'.$name.'</strong> Welcome to our website</p>';

        //Example 2 :  Sending GET request to another page
        echo '<a href=hello.php?name=Ahmed>Send Hello</a>';
    ?>
    <!-- Sending GET DATA using forms -->
    <form action="hello.php" method="GET">
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

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
</p>
</body>
</html>