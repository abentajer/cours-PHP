<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cookies example</title>
</head>
<body>
<p>Examples using cookies <br />
    <?php
        // 1 - Example 1 :  Setting the cookie
        setcookie(
            'AUTHENTICATED_USER',
            'ahmed.bentajer@um6p.ma',
             time() + 365 * 24 * 3600, // Conserver la donnée pendant un an
            true,
            false
        );
        echo '<br />';
        // 2 - Accessing the cookie
        // DELETE THE EXISTING COOKIE FROM YOUR BROWSER
        // BEFORE
        if(isset($_COOKIE['AUTHENTICATED_USER']))
            print_r($_COOKIE['AUTHENTICATED_USER']);
        else
            print_r('No cookie has been set up');

        // 3 - Deleting a cookie
        if(isset($_COOKIE['AUTHENTICATED_USER'])){
            echo '<br />';
            print_r('Destruction de la cookie');
            setcookie(
                'AUTHENTICATED_USER',
                'ahmed.bentajer@um6p.ma',
                time() - 100000,
                true,
                false
            );
        }
    ?>
</p>
</body>
</html>