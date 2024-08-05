<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Titile = $_POST["Titile"];
    $Description = $_POST["Description"];
    $Price = $_POST["Price"];

    $uploadDirectory = "uploads/";

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=malcolm_studio", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO pricing (titile, description, price) VALUES (?, ?, ?)");
        $stmt->execute([$Titile, $Description, $Price]);

        echo "Package added successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $pdo = null;
}
?>