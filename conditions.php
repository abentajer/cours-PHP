<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>IF Statement</title>
    </head>
<body>
    <p>IF Statement examples : <br />
    <?php
        $roll = rand(1, 6);
        echo 'You rolled a ' . $roll . '<br />';
        if ($roll >= 3) {
            echo 'You win!';
        }
        else{
            echo 'you didn\'t make it';
        }

        /*
        echo 'You rolled a ' . $roll . '<br />';
        if ($roll == 1 || $roll == 6) {
            echo 'You win!';
        }*/

        /* Test if the user rolled a 6
        if ($roll == 6) {
            echo 'You win!';
        }*/
    ?>
</p>
</body>
</html>