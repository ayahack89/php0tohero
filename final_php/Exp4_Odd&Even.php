<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Even Or Odd</title>
</head>

<body>
     <form action="Exp4_Odd&Even.php" method="post">
          <label for="number">Enter a number</label><br>
          <input type="number" name="number" id="number">
          <input type="submit" name="submit" value="submit">
     </form>
     <?php
     if (isset($_POST['submit'])) {
          $getNumber = $_POST['number'];
          if (!empty($getNumber)) {
               if ($getNumber % 2 == 0) {
                    echo "{$getNumber} is an even number";
               } else {
                    echo "{$getNumber} is an odd number";
               }

          } else {
               echo "<h3 style='color;red'>Please fill the input</h3>";
          }

     }


     ?>

</body>

</html>