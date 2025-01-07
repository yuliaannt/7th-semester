<?php
$host = 'db';
$user = 'root'; // Ganti jika diperlukan
$password = 'rootpass'; // Ganti jika diperlukan
$dbname = 'chat-app';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$message = $_POST['message'];
$media_url = '';
$media_type = 'text';

if (isset($_FILES['media']) && $_FILES['media']['error'] == 0) {
    $fileTmpPath = $_FILES['media']['tmp_name'];
    $fileName = $_FILES['media']['name'];
    $uploadFileDir = './uploads/';
    $dest_path = $uploadFileDir . $fileName;

    move_uploaded_file($fileTmpPath, $dest_path);
    $media_url = $dest_path;

    if (strpos($_FILES['media']['type'], 'image') !== false) {
        $media_type = 'image';
    } elseif (strpos($_FILES['media']['type'], 'video') !== false) {
        $media_type = 'video';
    } else {
        $media_type = 'document';
    }
}

$sql = "INSERT INTO messages (sender, receiver, message, media_type, media_url) VALUES ('$sender', '$receiver', '$message', '$media_type', '$media_url')";
$conn->query($sql);
$conn->close();

echo "<div class='message'><strong>$sender:</strong> $message <br>";
if ($media_url) {
    if ($media_type == 'image') {
        echo "<img src='$media_url' width='100'>";
    } elseif ($media_type == 'video') {
        echo "<video width='100' controls><source src='$media_url' type='video/mp4'></video>";
    } else {
        echo "<a href='$media_url'>Download Document</a>";
    }
}
echo "</div>";
?>