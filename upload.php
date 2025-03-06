<?php
    $message="";
    $LIMIT_MB = 600;
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if(isset($_POST["submit"])) {
      if(md5($_POST["password"])!="201016e8206a5f42aa527090511504d5"){
        $message.= "Sorry, the password did matched.<br>";
        $uploadOk = 0;
      }
      // Check if file already exists
      if (file_exists($target_file)) {
        $message.= "Sorry, file already exists.<br>";
        $uploadOk = 0;
      }
      // Check file size
        if ($_FILES["fileToUpload"]["size"] > $LIMIT_MB*1000) {
            $message.="Sorry, your file is too large.<br>";
            $uploadOk = 0;
        } 
        // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "docx" && $imageFileType != "xlsx"
&& $imageFileType != "txt" && $imageFileType != "zip" && $imageFileType != "pdf") {
  $message.= "Sorry, only JPG, JPEG, PNG, GIF, DOCX, XLSX, TXT, ZIP, PDF files are allowed.<br>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $message.= "Sorry, your file was not uploaded.<br>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $message.= "<b>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded. <b>";
  } else {
    $message.= "Sorry, there was an error uploading your file.<br>";
  }
}
    }
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