<?php include 'header.php'; ?>

<?php
$wrong = "";

$name = $_POST['username'];
$password = $_POST['password'];

if ($name == 'admin' &&  $password == 'admin') {
    header("Location: adminHome.php");
    exit;
} else {
    $wrong = "User Name or Passwrod not Corect!";
    header("Location: login.php?success=" . urlencode($wrong));
    exit;
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $conn = mysqli_connect("localhost", "root", "", "malcolm_studio");

//     $name = $_POST['username'];
//     $password = $_POST['password'];

//     $sql = "SELECT * FROM login WHERE id = 1";

//     $result = mysqli_query($conn, $sql);

//     if ($result) {
        
        
//     } else {
//         echo '<div class="alert alert-danger mt-3">Error: ' . $sql . '<br>' . mysqli_error($conn) . '</div>';
//     }

//     mysqli_close($conn);
// }
?>

<?php include 'footer.php'; ?>
