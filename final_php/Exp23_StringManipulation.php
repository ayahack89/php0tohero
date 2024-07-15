<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>String Manipulation</title>
</head>

<body>
     <form action="Exp23_StringManipulation.php" method="post">
          <label for="Sentence"><strong>Enter a sentence or just enter whatever you want:</strong></label><br><br>
          <textarea name="sentence" cols="50" rows="10"></textarea><br>
          <input type="submit" name="submit" value="Process">
     </form>
     <br>
     <div>
          <?php
          if (isset($_POST['submit'])) {
               $sentence = $_POST['sentence'];
               if (!empty($sentence)) {
                    $string = strval($sentence);
                    $uppercase = strtoupper($string);
                    echo "Uppercase: " . $uppercase . "<br>";

                    $lowercase = strtolower($uppercase);
                    echo "Lowercase: " . $lowercase . "<br>";

                    $ucFirst = ucfirst($lowercase);
                    echo "First character uppercase: " . $ucFirst . "<br>";

                    $ucWords = ucwords($lowercase);
                    echo "First character of all words uppercase: " . $ucWords . "<br>";

                    $lastEleven = substr($string, -11);
                    echo "Last 11 characters: " . $lastEleven . "<br>";

                    $replaceFirst = str_replace('the', 'best', $string);
                    echo "Replace first 'the' with 'best': " . $replaceFirst . "<br>";

                    $words = explode(' ', $string);
                    
                    if(isset( $words[1])){
                         $secondWord = $words[1];
                         echo "Second word: " . $secondWord . "<br>";

                    }else{
                         echo "This string does't have any second word.";
                    }
                    

                    $insertString = substr_replace($string, "awesome ", 15, 0);
                    echo "String with insertion: " . $insertString;

               } else {
                    echo "<h3 style='color:red'>Please fill the input.</h3>";
               }

          }
          ?>
     </div>

</body>

</html>