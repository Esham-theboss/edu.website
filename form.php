<?php
// MySQL database credentials
$servername = "localhost"; // or your server name
$username = "your_username"; // Update with your username
$password = "your_password"; // Update with your password
$dbname = "your_database"; // Update with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["pdfUpload"])) {
    $file = $_FILES["pdfUpload"];
    
    if ($file["error"] == 0) {
        $fileName = $file["name"];
        $fileTmpName = $file["tmp_name"];
        $fileType = $file["type"];
        $fileContent = addslashes(file_get_contents($fileTmpName));

        // Insert file details into the database
        // Ensure your table has columns named file_name, file_type, and file_content
        $sql = "INSERT INTO your_table_name (file_name, file_type, file_content) VALUES ('$fileName', '$fileType', '$fileContent')";
        
        if ($conn->query($sql) === TRUE) {
            echo "File uploaded successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading file";
    }
}

$conn->close();
?>