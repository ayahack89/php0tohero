<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>String Palindrom</title>
</head>
<body>
     <div>
          <form action="Exp15_StrPalindrom.php" method="post">
               <label for="str">Enter a word</label><br>
               <input type="text" name="word" id="str">
               <input type="submit" name="submit" value="Check Vowel">
          </form>
     </div>
     <div>
          <?php 
          if(isset($_POST['submit'])){
               $word = $_POST['word'];
               if(!empty($word)){
                    $extractString = strval($word);
                    $revStr = strrev($extractString);
                    $previous = $extractString;
                    if($previous == $revStr){
                         echo "It's a palindrom string";
                    }else{
                         echo "It's not a palindrom string";
                    }

               }else{
                    echo "<h3 style='color:red'>Please enter a word</h3>";
               }
          }
          ?>
     </div>
     
</body>
</html>