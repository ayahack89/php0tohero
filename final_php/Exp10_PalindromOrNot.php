<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Print palindrome</title>
</head>
<body>
     <div>
          <form action="Exp10_PalindromOrNot.php" method="post">
               <label for="number">Enter a number</label><br>
               <input type="number" name="number" id="number">
               <input type="submit" name="submit" value="Check Palindrom">

          </form>

     </div>
     <div>
          <?php 
          if(isset($_POST['submit'])){
               $number = $_POST['number'];
               if(!empty($number)){
                    $revNum = strrev(strval($number));
                    $previousNum = strval($number);


                     if($previousNum == $revNum){
                         echo "{$number} is a palindrom number";
                     }else{
                         echo "{$number} is not a palindrom number";
                     } 


               }else{
                    echo "<h3 style='color:red'>Please fill the input</h3>";
               }
          }
          ?>
     </div>
     
</body>
</html>