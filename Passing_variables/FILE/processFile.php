<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Processing File Example</title>
    </head>
<body>
    <p>Processing Uploaded File :
    <?php
        // ON TEST SI LA VARIABLE $_FILE est déclarée et différente de NULL
if (isset($_FILES['userFile'])) {
        $errors = array();

        // RECUPERATION DES INFOS SUR LE FICHIER
        $file_name = $_FILES['userFile']['name'];
        $file_size = $_FILES['userFile']['size'];
        $file_tmp = $_FILES['userFile']['tmp_name'];
        $file_type = $_FILES['userFile']['type'];
        // FOR FULL_PATH PHP 8 MUST BE INSTALLED AND USED
        // $file_full_path=$_FILES['userFile']['full_path'];
    var_dump($_FILES);
        // 1 - VERIFICATION DE L'EXTENTION DU FICHIER
        $file_name_part = explode(".", $file_name);
        $file_ext = strtolower(end($file_name_part));
        $extentions = ["doc", "docx"];

        if (in_array($file_ext, $extentions) === false) {
            $errors[] = "extension not allowed, please choose a doc or docx file.";
        }

        // 2 - TEST DU FILE SIZE < 2MB
        if ($file_size > 2097152) {
            $errors[] = 'File size must not exceed 2 MB';
        }

        // 3 - ON TEST S'IL N'Y A PAS D'ERREUR
        if (empty($errors) == true) {
            // ON ACCEPTE LE FICHIER AVEC MOVE_UPLOADED_FILE
            move_uploaded_file($file_tmp,"../uploads/rapport/".$file_name);
            echo "Fichier téléversé avec succès";
        } else {
            print_r($errors);
            
        }
    }
    else {
        echo 'error';
        
    }
    
    // UPLOAD MULTIPLE FILE
    /*
    foreach ($_FILES["userFile2"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["userFile2"]["tmp_name"][$key];
            // basename() may prevent filesystem traversal attacks;
            // further validation/sanitation of the filename may be appropriate
            $name = basename($_FILES["userFile2"]["name"][$key]);
            echo $name . '<br/>';
           // move_uploaded_file($tmp_name, "../upload/resume/$name");

            /* SECOND WAY
                // Count total files
                $countfiles = count($_FILES['userFile2']['name']);
 
                // Looping all files
                for($i=0;$i<$countfiles;$i++){
                    $filename = $_FILES['userFile2']['name'][$i];
   
                // Upload file
                move_uploaded_file($_FILES['userFile2']['tmp_name'][$i],'upload/'.$filename);
            *****;/
        }
    }*/var_dump($_FILES);
    ?>
    
    </p>
</body>
</html>