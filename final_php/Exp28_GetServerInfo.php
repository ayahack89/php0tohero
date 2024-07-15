<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Get Server Information</title>
</head>
<style>
     body {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
     }

     div {
          width: 200px;
          text-align: center;
          margin: 0;
     }

     input[type="submit"],
     button {
          background-color: black;
          border: none;
          color: white;
          padding: 10px 20px;
          font-family: monospace;

     }

     input[type="submit"]:hover,
     button:hover {
          cursor: pointer;
     }
</style>

<body>
     <form action="Exp28_GetServerInfo.php" method="post">
          <?php if (!isset($_POST['submit'])) { ?>
               <input type="submit" name="submit" value="Fetch Server Information">
               <?php
          } else {
               if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    echo "<pre><code>";
                    $serverName = $_SERVER['SERVER_NAME'];
                    echo "Server Name: $serverName";


                    $serverIP = $_SERVER['SERVER_ADDR'];
                    echo "Server IP: $serverIP\n";


                    $serverSoftware = $_SERVER['SERVER_SOFTWARE'];
                    echo "Server Software: $serverSoftware\n";


                    $serverProtocol = $_SERVER['SERVER_PROTOCOL'];
                    echo "Server Protocol: $serverProtocol\n";


                    $httpMethod = $_SERVER['REQUEST_METHOD'];
                    echo "HTTP Method: $httpMethod\n";


                    $scriptName = $_SERVER['SCRIPT_NAME'];
                    echo "Script Name: $scriptName\n";


                    $scriptFilename = $_SERVER['SCRIPT_FILENAME'];
                    echo "Script Filename: $scriptFilename\n";


                    $phpSelf = $_SERVER['PHP_SELF'];
                    echo "PHP Self: $phpSelf\n";


                    $requestURI = $_SERVER['REQUEST_URI'];
                    echo "Request URI: $requestURI\n";


                    $queryString = $_SERVER['QUERY_STRING'];
                    echo "Query String: $queryString\n";


                    $serverPort = $_SERVER['SERVER_PORT'];
                    echo "Server Port: $serverPort\n";


                    $remoteAddress = $_SERVER['REMOTE_ADDR'];
                    echo "Remote Address: $remoteAddress\n";


                    $remotePort = $_SERVER['REMOTE_PORT'];
                    echo "Remote Port: $remotePort\n";
                    echo "</pre></code>";

               } else {
                    echo "<h3 style='color:red'>405 Method not allowed</h3>";
               }

          }
          ?>
     </form>
</body>

</html>