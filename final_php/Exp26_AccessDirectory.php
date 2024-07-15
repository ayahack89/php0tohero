<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Access Directory</title>
</head>
<body>
     <form action="Exp26_AccessDirectory.php" method="post">
          <label for="name">Enter your name</label><br>
          <input type="text" name="name" id="name"><br>
          <label for="desc">Write whatever you want</label><br>
          <textarea name="desc" cols="50" rows="7"></textarea><br><br>
          <input type="submit" name="submit" value="Write In File">

     </form>
     <div>
          <?php
          if(isset($_POST['submit'])){
               $name = $_POST['name'];
               $desc = $_POST['desc'];
               if(!empty($name) && !empty($desc)){
                    $filename = "Blog.txt";
                    if($filename){
                         $open_file = fopen($filename, 'w');
                         if($open_file){
                          fwrite($open_file, "Author:".$name."..."."Desc:".$desc."END..");    
                         }else{
                              echo "<h3 style='color:red'>Error to open file</h3>"; 

                         }
                         fclose($open_file);
                    }else{
                         echo "<h3 style='color:red'>Oops! something went wrong : (</h3>";
                    }

               }else{
                    echo "<h3 style='color:red'>Please fill the all the inputs.</h3>";
               }

          }
          ?>
     </div>
     
</body>
</html>