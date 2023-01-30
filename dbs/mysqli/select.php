<?php
    // INCLUSION DU FICHIER CONTENANT LES INFOS DE CONNEXION
    require_once 'inc/mysql.php';
    require_once 'inc/mysqli_queries.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MySQLi Examples</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body>
<p>MySQLi : SELECT </p>
<?php
    $mysqli = open_connection();
    if (is_null($mysqli))
        exit();
    // PREPARE AND EXECUTE QUERY
    $query  = 'SELECT * FROM CUSTOMERS LIMIT 5';
    $results = $mysqli -> query($query);

    // 4 - TRAITEMENT DU RESULTAT
    //fetch_all_ex($results);
    //fetch_array_ex($results);

    // 5 - PREPARED STATEMENT
    mysqli_prepare_ex("Madrid",$mysqli);
    // Fermeture de la connexion
    //close_connection($mysqli);
?>



</body>
</html>