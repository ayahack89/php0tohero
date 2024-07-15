<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image File Upload</title>
</head>
<body>
    <form action="Exp32_UploadFile&GetInfo.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload"><strong>Select a file to upload:</strong></label>
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit" value="Upload File" name="submit">
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
        $fileName = $_FILES['fileToUpload']['name'];
        $fileType = $_FILES['fileToUpload']['type'];
        $fileSize = $_FILES['fileToUpload']['size'];
        $fileTmpName = $_FILES['fileToUpload']['tmp_name'];

        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowedTypes = [
          // Text Files
          'txt',
          'md',
          'rtf',
      
          // Document Files
          'doc',
          'docx',
          'odt',
          'pdf',
          'xls',
          'xlsx',
          'ods',
          'ppt',
          'pptx',
          'odp',
      
          // Image Files
          'jpg',
          'jpeg',
          'png',
          'gif',
          'bmp',
          'tiff',
          'tif',
          'svg',
      
          // Audio Files
          'mp3',
          'wav',
          'aac',
          'flac',
          'ogg',
      
          // Video Files
          'mp4',
          'avi',
          'mkv',
          'mov',
          'wmv',
      
          // Compressed Files
          'zip',
          'rar',
          '7z',
          'tar',
          'gz',
      
          // Executable Files
          'exe',
          'bat',
          'sh',
          'bin',
      
          // Web Files
          'html',
          'htm',
          'css',
          'js',
          'json',
          'xml',
      
          // Programming Files
          'c',
          'cpp',
          'py',
          'java',
          'rb',
          'php',
          'pl',
          'cs',
      
          // Database Files
          'db',
          'sql',
          'mdb',
          'accdb',
      
          // System Files
          'dll',
          'sys',
          'ini',
          'log',
      
          // Miscellaneous Files
          'iso',
          'dmg',
          'torrent'
      ];
      

        if (in_array($fileExtension, $allowedTypes)) {
            $targetDir = "uploadFiles/";
            $targetFile = $targetDir . basename($fileName);

            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            if (move_uploaded_file($fileTmpName, $targetFile) && !empty($_FILES['fileToUpload'])) {
               echo "<br><br>";
                echo "File has been uploaded successfully.<br>";
                echo "File Name: " . htmlspecialchars($fileName) . "<br>";
                echo "File Type: " . htmlspecialchars($fileType) . "<br>";
                echo "File Size: " . htmlspecialchars($fileSize) . " bytes<br>";
                echo "File Temporary Location: " . htmlspecialchars($fileTmpName) . "<br>";
                echo "File Location: " . htmlspecialchars($targetFile) . "<br><br>";
            } else {
                echo "<h3 style='color:red'>Sorry, there was an error uploading your file.</h3>";
            }
        } else {
            echo "<h3 style='color:red'>Sorry, this types of files is not allowed.</h3>";
        }
    } else {
        echo "<h3 style='color:red'>No file was uploaded or there was an error uploading the file.</h3>";
    }
} else {

}
?>



</body>
</html>