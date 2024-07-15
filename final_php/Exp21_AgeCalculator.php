<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Age Calculator</title>
</head>

<body>
     <form action="Exp21_AgeCalculator.php" method="post">
          <label for="age">Enter your date of birth</label>
          <input type="date" name="age" id="age">
          <input type="submit" name="submit" value="Calculate your age">
     </form>
     <div>
          <?php
          if (isset($_POST['submit'])) {
               $age = $_POST['age'];
               if (!empty($age)) {
                    # Your birth year
                    $strAge = strval($age);
                    $splitAge = explode(" ", $strAge);
                    $indexOfZeroAge = $splitAge[0];
                    $doubleSplit = substr($indexOfZeroAge, 0, 4);
                    $birthYear = intval($doubleSplit);
                    # Current year
                    $currentDate = date("l jS \of F Y h:i:s A");
                    $strDate = strval($currentDate);
                    $splitDate = explode(" ", $strDate);
                    $indexOfZeroCurrentYear = $splitDate[4];
                    $currentYear = intval($indexOfZeroCurrentYear);

                    $yourAge = $currentYear - $birthYear;
                    echo "Your age is {$yourAge}";

               } else {
                    echo "<h3 style='color:red'>Please enter your Date of Birth.</h3>";
               }

          }
          ?>
     </div>

</body>

</html>