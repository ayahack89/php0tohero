<!DOCTYPE html>
<html lang="en">
<?php 
ini_set("error_reporting", 0);
?>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Mobile Device or not</title>
</head>
<style>
     body {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
     }

     div {
          width: 200px;
          text-align: center;
          margin: 0;
     }

     input[type="submit"],
     button {
          background-color: black;
          border: none;
          color: white;
          padding: 10px 20px;
          font-family: monospace;

     }

     input[type="submit"]:hover,
     button:hover {
          cursor: pointer;
     }
</style>

<body>
     <form action="Exp29_MobileDeviceOrNot.php" method="post">
          <?php if (!isset($_POST['submit'])) { ?>
               <input type="submit" name="submit" value="Check The Current Device">
          <?php } else {
               function IsMobileDevice()
               {
                    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i"
                         ,
                         $_SERVER['HTTPS_USER_AGENT']
                    );
               }
               if (IsMobileDevice()) {
                    echo "<h2><code>This is a mobile device</code></h2>";
               } else {
                    echo "<h2><code>This is not a mobile device</code></h2>";
               }




          } ?>
     </form>

</body>

</html>