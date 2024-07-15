<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Multiplication Table</title>
</head>
<body>
     <form action="Exp7_MultiplicationTable.php" method="post">
          <label for="number">Enter a number for your table</label><br>
          <input type="number" name="number" id="number">
          <input type="submit" name="submit" value="submit">
     </form>
     <?php 
     if(isset($_POST['submit'])){
          $getNumber = $_POST['number'];
          if(!empty($getNumber)){
                for($i = 1; $i<11; $i++){
                    echo "{$getNumber}* $i =".$getNumber*$i. "<br>";
                }
          }else{
               echo "<h3 style='color:red'>Please give a number to create a table</h3>";
          }
     }
     ?>
     
</body>
</html>