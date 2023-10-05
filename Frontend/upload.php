<?php
// Initialize the database connection
$db = new mysqli("localhost", "username", "password", "database_name");

// Check for a database connection error
if ($db->connect_error) {
    die("Database connection failed: " . $db->connect_error);
}

if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
    $imageData = file_get_contents($_FILES["image"]["tmp_name"]);
    $imageName = $_FILES["image"]["name"];

    // Insert the image data into the database
    $query = "INSERT INTO images (filename, data) VALUES (?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("sb", $imageName, $imageData);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
} else {
    echo "Error: Invalid file or file not uploaded.";
}

// Close the database connection
$db->close();
?>
