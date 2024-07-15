<!DOCTYPE html>
<html lang="en">
<head>
    <title>URL SERVER</title>
</head>
<body>
<form action="Exp31_URLInfo.php" method="post">
       <label for="urlInfo">Url Information:</label>
        <input type="text" placeholder="Enter a URL" id="url" name="url">
        <br>
        <button type="submit" name="submit">Process</button>
    </form>
    <div>
     <?php 
     if(isset($_POST['submit'])){
          $url = $_POST['url'];
          if(!empty($url)){
               if($_POST){
                    $infoUrl = parse_url($url);
                    ?>
                    <pre>
                        <strong><?php print_r($infoUrl); ?></strong>
                    </pre>

                    <?php 

               }else{
                    echo "<h3 style='color:red'>Oops! Network request issue.</h3>";
               }

          }else{
               echo '<h3 style="color:red">Please fill the input.</h3>';
          }

     }
     ?>
    </div>
</body>
</html>