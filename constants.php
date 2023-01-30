<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Constants</title>
    </head>
<body>
    <p>Constant examples : <br />
    <?php
        //DEFINITION D'UNE VARIABLE CONSTANTES
        define('hello', "HELLO WORLD !<br />");
        echo hello;

        //DEFINITION D'UNE CONSTANTE TABLEAU
        define('cars',["Renault","Mercedes","BMW","AUDI"]);
        echo cars[2].'<br/>';


        echo 'The current line number' . __LINE__ . '<br/>';
        echo 'The full path and filename of the file' . __FILE__ . '<br/>';
        echo 'The directory of the file' . __DIR__ . '<br/>';
        echo 'The function name : ' . __FUNCTION__ . '<br/>';
        echo 'The class name' . __CLASS__ . '<br/>';
        echo '_The class method name' . __METHOD__ . '<br/>';
        echo 'The name of the current namespace' . __NAMESPACE__ . '<br/>';
        
        function testConstant() {
            // code
            echo 'The function name (Must be used inside the function) : ' . __FUNCTION__ . '<br/>';
            
        }
       // $out = `tree`;
      //echo 'sdsdsdsdsd<pre>'.$out.'</pre>';
     

    ?>
</p>
</body>
</html>