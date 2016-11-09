<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gallery</title>
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <form action="addphoto.php" method="post" id="photo" enctype="multipart/form-data">
            <input type="file" name="photo"/>
            <input type="submit"/>
        </form>
        <div class="gallery"></div>
    </body>
</html>