<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week5</title>
</head>
<body>
    <?php
      //connection string.
      //root is a password.
      // coloors is the name of database.
      $connect = mysqli_connect('localhost', 'root', '', 'CSV_DB 9');

      if(!$connect){
        //die will stop processing the php 
        die("Connection Failed" . mysqli_connect_error()); //any error releted to connection itself 
      }

      $query = "SELECT * FROM colors";
      $colors = mysqli_query($connect, $query);
      //echo '<pre>' . print_r($colors) . '</pre>' 
      while ($record = mysqli_fetch_assoc($colors)) //it will convert all records into array using mysqli_fetch_assoc[associative array]
      {
        //echo '<pre>' . print_r($record) . '</pre>';
        echo '<div style = "background-color:' . $record["Hex"] . '; height: 100px; width:100%; text-align: center; align-content: center; margin: 20px; >' . $record["Name"] .  '</div>';
      }
    ?>
</body>
</html>