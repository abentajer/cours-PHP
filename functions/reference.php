<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Functions example</title>
    </head>
<body>
    <p>Example functions usage <br />
    <?php
        // 1 - Passage par valeur et par référence des valeurs
        function addTwo($num){
            $num += 2;
        }

        function addFour(&$num){
            $num += 4;
        }
        echo"<br /> **** Passing parameter by value and by reference ****<br/>";
        $orignum = 10;
        addTwo( $orignum );         
        echo "Original Value is $orignum<br />";
        addFour( $orignum );
        echo "Original Value is $orignum<br />";


        // 2 - FONCTION RETOURNANT DES VALEURS
        echo"<br /> **** Functions returning values ****<br/>";
        function addFunction($a,$b){
            return $a + $b;
            }
            
        $numberOne = 12;
        $numberTwo = 8;
        $sum = addFunction($numberOne, $numberTwo);
        echo "<br />La somme de $numberOne + $numberTwo = $sum <br/>";
        echo "La somme de $numberOne + $numberTwo = ".addFunction($numberOne, $numberTwo)."<br/>";

        // 3 - DEFINIR VALEUR PAR DEFAUT
        echo"<br /> **** Defining default value for function parameter ****<br/>";
        function printMsg($msg = "This is a default value <br/>"){
            print $msg;
        }
        printMsg("Hello the world!<br/>");
        printMsg();


        
    ?>
</p>
</body>
</html>