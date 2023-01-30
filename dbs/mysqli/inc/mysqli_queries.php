<?php

function fetch_all_ex(mysqli_result $results){
    echo "Number of affected row : ".$results -> num_rows;
    var_dump($results);
    $rows = $results -> fetch_all();
    echo"<br/>--------------------------<br/>";
    var_dump($rows);
    echo "<table class=table>";
    echo "<thead><tr>";
    echo "<th>Customer Number</th>";
    echo "<th>Customer Name</th>";
    echo "<th>Contact Last Name</th>";
    echo "<th>Contact First Name</th>";
    echo "<th>Phone</th>";
    echo "<th>Address Line 1</th>";
    echo "<th>Address Line 2</th>";
    echo "<th>City</th>";
    echo "<th>State</th>";
    echo "<th>Postal Code</th>";
    echo "<th>Country</th>";
    echo "<th>Sales Rep. Code</th>";
    echo "<th>Credit Limit</th>";
    echo "</tr></thead>";
    foreach ($rows as $value){
        echo '<tr>';
        for($i = 0; $i < $results -> field_count ;++$i)
            echo '<td>'.$value[$i].'</td>';
        echo '</tr>';
    }
    echo '</table>';

    // REFAIRE L'EXEMPLE AVEC MYSQL_ASSOC
}

function fetch_array_ex(mysqli_result $results){
    echo "Number of affected row : ".$results -> num_rows."<br/>";
    var_dump($results);
    echo"<br/>--------------------------<br/>";

    echo "<table class=table>";
    echo "<thead><tr>";
    echo "<th>Customer Number</th>";
    echo "<th>Customer Name</th>";
    echo "<th>Contact Last Name</th>";
    echo "<th>Contact First Name</th>";
    echo "<th>Phone</th>";
    echo "<th>Address Line 1</th>";
    echo "<th>Address Line 2</th>";
    echo "<th>City</th>";
    echo "<th>State</th>";
    echo "<th>Postal Code</th>";
    echo "<th>Country</th>";
    echo "<th>Sales Rep. Code</th>";
    echo "<th>Credit Limit</th>";
    echo "</tr></thead>";
    while ($row = $results -> fetch_array(MYSQLI_NUM)) {
        print_r($row);
        echo "<br/>";
        echo '<tr>';
        //var_dump($row);
        for ($i = 0; $i < $results->field_count; ++$i)
            echo '<td>' . $row[$i] . '</td>';
    }
    echo '</table>';

}

function mysqli_prepare_ex($city, mysqli $mysqli){
    /* create a prepared statement */
    $stmt = $mysqli->prepare("SELECT * FROM CUSTOMERS WHERE CITY=?");

    /* bind parameters for markers */
    $stmt->bind_param("s", $city);
    /* execute query */
    $stmt->execute();

    /* Get result from a prepared Stmt as a ResultSet */
    $result = $stmt -> get_result();
    fetch_array_ex($result);

    $stmt -> close();


    interface Shape {
        public function area();
    }

    class Square implements Shape {
        private $side;
        public function __construct($side) {
            $this->side = $side;
        }
        public function area() {
            return $this->side * $this->side;
        }
    }

    class Circle implements Shape {
        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function area() {
            return pi() * $this->radius * $this->radius;
        }
    }

    function calculateArea(Shape $shape) {
        return $shape->area();
    }

    $square = new Square(5);
    $circle = new Circle(2);

    echo calculateArea($square); // 25
    echo calculateArea($circle); // 12.57




}