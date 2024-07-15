<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Get the name and phone number of and user and show greeting text</title>
</head>

<body>

     <div>
          <form action="Exp2&3_GetTheName&PhoneNoOfAUserAndShowGreetingText.php" method="post">
               <label for="name">Enter your name</label><br>
               <input type="text" name="name" id="name"><br>
               <label for="phoneNo">Enter your phone number</label><br>
               <input type="number" name="number" id="number"><br><br>
               <input type="submit" name="submit" value="submit">
          </form>
          <br>
          <div>
               <?php
               if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $number = $_POST['number'];
                    if (!empty($name) && !empty($number)) {
                         echo "Your name is " . $name . "<br>";
                         echo "Your phone number is " . $number;


                    } else {
                         echo "<h3 style='color:red'>Please fill all the inputs</h3>";
                    }

               }
               ?>
          </div>
     </div>


</body>

</html>