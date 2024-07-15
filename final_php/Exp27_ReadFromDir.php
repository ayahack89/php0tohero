<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Read from directory</title>
</head>
<body>
     <?php 
     echo "<strong><code>Current Directory => ".__DIR__."</code></strong><br>";
     $dir = opendir(__DIR__);
     while($retrieveDirDetails = readdir($dir)){
          echo "<pre><code>";
          echo $retrieveDirDetails;
          echo "</pre></code>";
     }
     ?>
     
</body>
</html>