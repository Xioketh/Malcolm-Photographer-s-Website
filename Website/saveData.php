

<?php

$success_message = "";
$unsuccess_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $conn=mysqli_connect("localhost","root","","malcolm_studio");


   $name = $_POST['name'];
   $email = $_POST['email'];
   $date = $_POST['date'];
   $contact = $_POST['contact'];
   $message = $_POST['message'];

   $sql = "INSERT INTO appointments (name, email, date, message, contact )
           VALUES ('$name', '$email', '$date', '$message','$contact')";

if ($conn->query($sql) === TRUE) {
    // echo '<div class="alert alert-success mt-3">Data saved successfully!</div>';
    $success_message = "Data saved successfully!";
    header("Location: contact.php?success=" . urlencode($success_message));
exit;
} else {
    // echo '<div class="alert alert-danger mt-3">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    $unsuccess_message = "Data saved unsuccessfully!";
    header("Location: contact.php?success=" . urlencode($unsuccess_message));
exit;
}
    $conn->close();
    
}

?>





