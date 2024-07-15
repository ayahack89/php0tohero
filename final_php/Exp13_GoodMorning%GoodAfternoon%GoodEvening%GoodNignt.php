<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Digital clock with current time of the server</title>
</head>
<body>
     <div>
          <?php 
          $SetServerTime = date_default_timezone_set("Asia/Kolkata");
          echo "Current time ". date("h:i:sa")."<br>";
          $getDateTime = date("h:i:sa");
          if($getDateTime > "9:00AM"){
               echo "Good Morning buddy";
          }else if($getDateTime < "12:00PM"){
               echo "Good Afternoon let's finish your lunch buddy";
          }else if($getDateTime < "5:00PM"){
               echo "Good Evening buddy let's play football";
          }else if($getDateTime <  "10:00PM"){
               echo "Now it's time to sleep buddy";

          }else{
               echo "Fuck you, mf I am not your slave";
          }

          #Logical error
          
          ?>
     </div>
     
</body>
</html>