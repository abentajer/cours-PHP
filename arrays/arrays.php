<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Associative arrays</title>
    </head>
<body>
    <p>Associative Array: <br />
    <?php
        // - Associative arrays example 1
        $students = [
            //ROW 1
            [
                'name' => 'Ahmed',
                'num' => 'CS6-2022-01',
                'school' => 'CS',
            ], 
            // ROW 
            [
                'name' => 'Joudia',
                'num' => 'CS6-2022-02',
                'school' => 'CS',
            ],
            //ROW 3
            [
                'name' => 'Mustapha',
                'num' => 'CS6-2022-03',
                'school' => 'CS',
            ]

        ];
        var_dump($students);
        echo "<br /> Showing information about 1st Student : <br />";
        echo 'Name : '. $students[0]["name"] .' - Num : '. $students[0]["num"] .'- School : '. $students[0]["school"];

        /*/ LOOP TO SHOW ALL ARRAY ELEMENTS
        for($row = 0; $row < 3; $row++){
            // THE ARRAY MUST BE INDEXED
            for($col = 0; $col < 3; $col++){
                echo $students[$row][$col];
            }
        }*/

        // SECOND EXAMPLE OF MULTI-ARRAY
        $marks = array( 
            "mohammad" => array (
               "physics" => 12,
               "maths" => 15,	
               "chemistry" => 15
            ),
            
            "Joudia" => array (
               "physics" => 16,
               "maths" => 12,
               "chemistry" => 14
            ),
            
            "youness" => array (
               "physics" => 13,
               "maths" => 15,
               "chemistry" => 17
            )
         );

         foreach ($marks as $markrowk => $markrowv ) {
            echo "<br/>Notes de $markrowk <br/>";
            foreach($markrowv as $markk => $markv){
                echo$markk.' : '.$markv.'<br/>';
                //echo '<br/>'.$colkey.' - '.$colvalue.'<br/>';
            }
            echo '<br/>';
         }

           
    ?>
</p>
</body>
</html>