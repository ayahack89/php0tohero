<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Swap two numbers</title>
</head>

<body>
     <form action="Exp6_Swap2Numbers.php" method="post">
          <label for="number1">Enter number one</label><br>
          <input type="number" name="numberOne" id="number1"><br>
          <label for="number2">Enter number two</label><br>
          <input type="number" name="numberTwo" id="number2"><br><br>
          <input type="submit" name="submit" value="submit">
     </form><br> <hr>
     <?php 
     if(isset($_POST['submit'])){
          $getNumberOne = $_POST['numberOne'];
          $getNumberTwo = $_POST['numberTwo'];
          if(!empty($getNumberOne) && !empty($getNumberTwo)){
               
               echo "Before swap <br>";
               echo "First number => {$getNumberOne} <br>";
               echo "Second number => {$getNumberTwo}<br> <hr>";
               
               $tempVar = $getNumberOne;
               $getNumberOne = $getNumberTwo;
               $getNumberTwo = $tempVar;
               
               echo "After swap <br>";
               echo "First number => {$getNumberOne}<br>";
               echo "Second number => {$getNumberTwo}<br><hr>";

          }else{
               echo "<h3 style='color:red'>Please fill all the inputs</h3>";
          }
     }
     ?>

</body>

</html>