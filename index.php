<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'my_website');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch images from the database
$sql = "SELECT image_name, image_path, description FROM images";
$result = $conn->query($sql);

// Loop through the results and display each image
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<img src='" . $row['image_path'] . "' alt='" . $row['image_name'] . "'>";
        echo "<p>" . $row['description'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No images found!";
}

// Close the connection
$conn->close();
?>
