<?php
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="mystyle.css">
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body>
    <header>
        <h1><a href="index.html" class="logo">Infoka.hu</a></h1>
    </header>
    <div class="container">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            Password: <input type="password" name="password"><br>
            File: <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" value="Upload File" name="submit">
        </form>
        <div>
          <?php echo $message; ?>
        </div>
    </div>
</body>
</html>