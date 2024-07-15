<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image File Upload</title>
</head>
<body>
    <form action="Exp33_ImageFileUploadInFolder.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload"><strong>Select an image file to upload:</strong></label>
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

        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (in_array($fileType, $allowedTypes)) {
            $targetDir = "uploads/";
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
                echo "<img src='{$targetFile}'/>";
            } else {
                echo "<h3 style='color:red'>Sorry, there was an error uploading your file.</h3>";
            }
        } else {
            echo "<h3 style='color:red'>Sorry, only image files (JPEG, PNG, GIF) are allowed.</h3>";
        }
    } else {
        echo "<h3 style='color:red'>No file was uploaded or there was an error uploading the file.</h3>";
    }
} else {

}
?>



</body>
</html>