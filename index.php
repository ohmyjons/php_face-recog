<?php 
$folderUpload = __DIR__ . "/images";
if (!is_dir($folderUpload)){

    mkdir($folderUpload, 0777, $rekursif = true);
    
};

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload Files</title>
    </head>
<body>
    <h1>
        Belajar Upload File
    </h1>

    <form action="proses.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="">
                foto
            </label><br>
            <input type="file" name="foto" >
        </div>
        <div style="margin-top: 1rem;">
            <!-- <button>Upload</button> -->
            <input type="submit"/>
        </div>
    </form>
</body>
</html>