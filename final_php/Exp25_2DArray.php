<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>2D Array</title>
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
     <form action="Exp25_2DArray.php" method="post">
          <?php
          if (!isset($_POST['submit'])) {
               ?>
               <input type="submit" name="submit" value="Check 2D Array">
          <?php } else {
               $cars = array(
                    array("Volvo", 22, 18),
                    array("BMW", 15, 13),
                    array("Saab", 5, 2),
                    array("Land Rover", 17, 15)
               );
               echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
               echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
               echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
               echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

               for ($row = 0; $row < 4; $row++) {
                    echo "<p><b>Row number $row</b></p>";
                    echo "<ul>";
                    for ($col = 0; $col < 3; $col++) {
                         echo "<li>" . $cars[$row][$col] . "</li>";
                    }
                    echo "</ul>";
               }

          } ?>
     </form>

</body>

</html>