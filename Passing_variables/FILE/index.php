<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>FILE Upload example</title>
    </head>
<body>
    <!-- The filename of the currently executing script, relative to the document root -->
    <form action="processFile.php" method="POST" enctype="multipart/form-data" >
        <div class="container">
            
            <label for="userFile"><b>Send File</b></label>
            <!-- MAX_FILE_SIZE must precede the file input field
            <input type="hidden" name="MAX_FILE_SIZE" value="2097152" /> -->
            <!-- MAX_FILE_SIZE hidden field (measured in bytes) must precede the file input field, and its value is the maximum filesize accepted by PHP. -->
            
           <!--<input type="file" name="userFile" webkitdirectory multiple/> -->

            
            <input type="file" name="userFile2[]" />
            <input type="file" name="userFile2[]" />
            <input type="file" name="userFile2[]" />
            <input type="file" name="userFile2[]" />
            
            <button type="submit">Envoyer</button>
            
        </div>

        
    </form>    

</body>
</html>