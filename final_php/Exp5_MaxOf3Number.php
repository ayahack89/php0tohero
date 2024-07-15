<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Max of 3 number</title>
</head>

<body>
     <form action="Exp5_MaxOf3Number.php" method="post">
          <label for="number1">Enter number one</label><br>
          <input type="number" name="numberOne" id="number1"><br>
          <label for="number2">Enter number two</label><br>
          <input type="number" name="numberTwo" id="number2"><br>
          <label for="number3">Enter number three</label><br>
          <input type="number" name="numberThree" id="number3"><br><br>
          <input type="submit" name="submit" value="submit">
     </form>
     <div>
          <?php
          if (isset($_POST['submit'])) {
               $getNumberOne = $_POST['numberOne'];
               $getNumberTwo = $_POST['numberTwo'];
               $getNumberThree = $_POST['numberThree'];
               if (!empty($getNumberOne) && !empty($getNumberTwo) && !empty($getNumberThree)) {
                    if(($getNumberOne > $getNumberTwo) && ($getNumberOne > $getNumberThree)){
                         echo "{$getNumberOne} is greatest";

                    }else if(($getNumberTwo > $getNumberOne) && ($getNumberTwo > $getNumberThree )){
                         echo "{$getNumberTwo} is greatest";
                    }else{
                         echo "{$getNumberThree} is greatest";
                    }
                 

               }else{
                    echo "<h3 style='color:red'>Please fill all the inputs</h3>";
               }
          }
          ?>
     </div>

</body>

</html>