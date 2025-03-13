<?php
/*
 
 CREATE TABLE notes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    note TEXT NOT NULL,
    createdAt DATETIME DEFAULT CURRENT_TIMESTAMP
);
*/
    $message = "";
    
    $db = new SQLite3('notes.db');
    if(isset($_POST["submit"])) {
        if(md5($_POST["password"])=="201016e8206a5f42aa527090511504d5"){
            $note = $_POST["note"];
            $query = "INSERT INTO notes (note) VALUES ('$note')";
            $result = $db->query($query);
        }
    }
    $query = "SELECT * FROM notes ORDER BY createdAt DESC";
    $result = $db->query($query);
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $note = nl2br($row['note']);
        $message .= "<p>".$row['createdAt']." -- ".$note."<p><hr>";
    }
    $db->close();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="mystyle.css">
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body>
    <header>
        <h1><a href="index.html" class="logo">Infoka.hu</a></h1>
    </header>
    <div class="container">
        <form action="notes.php" method="POST" enctype="multipart/form-data">
            Password: <input type="password" name="password"><br>
            <textarea name="note" rows="10" cols="50"></textarea><br>
            <input type="submit" value="Submit" name="submit">
        </form>
        <div>
          <?php echo $message; ?>
        </div>
    </div>
</body>
</html>