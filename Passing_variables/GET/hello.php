<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Page example of GET</title>
    </head>
<body>
    <p>Passing variables in Links :
    <?php
    echo __DIR__.'/css/get.css';
        // Example 
        $name = $_GET['uname'];
        echo '<p>Hello <strong>'.$name.'</strong> Welcome to our website</p>';
        
        //extract — Import variables into the current symbol table from an array
        //Instead of using $_GET['keyName'] we use only g_keyName
        //More on https://www.php.net/manual/en/function.extract.php
        extract($_GET, EXTR_PREFIX_ALL, 'g');
        echo '<p>Hello <strong>'.$g_name.'</strong> Welcome to our website</p>';

        /*  GET DATA SENT FROM FORM */
        extract($_GET);
        echo '<p>Your login is : '.$uname.' and your password is :'.htmlspecialchars($psw).'</p>';

    ?>
    
</p>
</body>
</html>