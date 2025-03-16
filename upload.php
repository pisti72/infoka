<?php
    $message="";
    $LIMIT_MB = 600;
    $target_dir = "uploads/";
    $uploadOk = true;
    
    if(isset($_POST["submit"])) {
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      if(md5($_POST["password"])!="201016e8206a5f42aa527090511504d5"){
        $message.= "Sorry, the password did matched.<br>";
        $uploadOk = false;
      }
      // Check if file already exists
      if (file_exists($target_file)) {
        $message.= "Sorry, file already exists.<br>";
        $uploadOk = false;
      }
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > $LIMIT_MB*1000) {
          $message.="Sorry, your file is too large.<br>";
          $uploadOk = false;
      } 
      // Allow certain file formats
      $extensions = ["jpg","png","jpeg","gif","docx","xlsx","txt","py","zip","pdf","html"];
      $has_extension = false;
      foreach($extensions as $item){
        if($imageFileType == $item){
          $has_extension = true;
        }
      }
      if(!$has_extension){
        $message.= "Sorry, only <b>".implode(", ",$extensions)."</b> files are allowed.<br>";
        $uploadOk = false;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          $message.= "<b>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded. <b>";
        } else {
          $message.= "Sorry, there was an error uploading your file.<br>";
        }
      // if everything is ok, try to upload file
      } else {
        $message.= "Sorry, your file was not uploaded.<br>";
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
      <h2>File upload</h2>
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <table>
          <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td>File:</td>
            <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Upload File" name="submit"></td>
          </tr>
        </table>
      </form>
        <div>
          <?php echo $message; ?>
        </div>
    </div>
</body>
</html>