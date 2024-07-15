<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Mathematical calculator </title>
</head>
<body>
     <div>
          <form action="Exp8_MathematicalCalculator.php" method="post">
               <label for="numberOne">Enter a number</label><br>
               <input type="number" name="numberOne" id="numberOne"><br>
               <label for="numberTwo">Enter another number</label><br>
               <input type="number" name="numberTwo" id="numberTwo"><br><br>
     
               <select name="selectOperation" id="selectOperation">
                    <option value="Nothing">--Select an option--</option>
                    <option value="+">Addition(+)</option>
                    <option value="-">Subtraction(-)</option>
                    <option value="*">Multiplication(*)</option>
                    <option value="/">Division(/)</option>
                    <option value="%">Modulo(%)</option>
               </select>

               <input type="submit" name="submit" value="Result">
          </form>
     </div>
     <div>
          <?php 
          if(isset($_POST['submit'])){
               $getNumberOne = $_POST['numberOne'];
               $getNumberTwo = $_POST['numberTwo'];
               $getOperations = $_POST['selectOperation'];
               
               if(!empty($getNumberOne) && !empty($getNumberTwo) && !empty($getOperations)){
                    
                    switch ($getOperations) {
                         case '+':
                              $Addition = $getNumberOne + $getNumberTwo;
                              echo "Addition(+)=>".$Addition;
                              break;
                         case '-':
                              $Subtraction = $getNumberOne - $getNumberTwo;
                              echo "Subtraction(-)=>".$Subtraction;
                              break;
                         case '*':
                              $Multiplication = $getNumberOne * $getNumberTwo;
                              echo "Multiplication(*)=>".$Multiplication;
                              break;
                         case '/':
                              $Division = $getNumberOne / $getNumberTwo;
                              echo "Division(/)=>".$Division;
                              break;
                         case '%':
                              $Modulo = $getNumberOne % $getNumberTwo;
                              echo "Modulo(%)=>".$Modulo;
                              break;
                         default:
                              echo "<strong style='color:grey'>Please choose one of the given option.</strong>";
                              break;
                    }

               }else{
                    echo"<h3 style='color:red'>Please fill all the inputs and  select a given operation to perform the calculation</h3>";
               }
          }
          ?>
     </div>
     
</body>
</html>