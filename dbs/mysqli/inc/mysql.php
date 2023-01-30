<?php
// 1-  DEFINITION DES ATTRIBUTS DE CONNEXION
const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 3306;
const MYSQL_DB_NAME = 'lbd4_course';
const MYSQL_USER = 'lbd4';
const MYSQL_PASSWORD = 'lbd4';

    function open_connection(){
        // You should enable error reporting for mysqli before attempting to make a connection
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        // 1 - OPEN CONNECTION
        $mysqli = new mysqli(
            MYSQL_HOST,
            MYSQL_USER,
            MYSQL_PASSWORD,
            MYSQL_DB_NAME,
            MYSQL_PORT);
        // 2 - CHECK IF THE CONNECTION HAVE BEEN OPENED
        if($mysqli-> connect_errno ){
            echo 'Erreur de connexion à la bdd<br/>.';
            echo 'Erreur N :  '.$mysqli-> connect_errno.'<br />';
            echo 'message : '.$mysqli-> connect_error;
            return false;
        }else
            return $mysqli;
    }

    function close_connection(mysqli $mysqli){
        $mysqli->close();
    }



