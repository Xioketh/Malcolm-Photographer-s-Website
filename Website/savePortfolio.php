<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST["category"];

    $uploadDirectory = "uploads/";

    if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["image"]["tmp_name"];
        $imagePath = $uploadDirectory . basename($_FILES["image"]["name"]);

        move_uploaded_file($tmp_name, $imagePath);
    } else {
        echo "Error uploading the image.";
        exit();
    }

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=malcolm_studio", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO portfolio (category, image) VALUES (?, ?)");
        $stmt->execute([$category, $imagePath]);

        echo "Instrument added successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $pdo = null;
}
?>
