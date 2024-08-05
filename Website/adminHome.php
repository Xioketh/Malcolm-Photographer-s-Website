<?php include 'adminHeader.php';?>


<body>
<div class="m-5">
    <h2 style="font-family: 'Indie Flower', cursive;">Appointments</h2>
</div>
<div class="data m-5">
<!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->

<?php
$conn=mysqli_connect("localhost","root","","malcolm_studio");



$sql = "SELECT name,email,date,message,contact FROM appointments";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    echo '<table class="table">';
    echo '<thead ><tr><th scope="col">Name</th><th scope="col">Email</th><th scope="col">Appointment Date</th><th scope="col">Contact</th><th scope="col">Message</th></tr></thead>';
    echo '<tbody>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['date'] . '</td>';
        echo '<td>' . $row['contact'] . '</td>';
        echo '<td>' . $row['message'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody></table>';
} else {
    echo '<div class="alert alert-info">No records found.</div>';
}


$conn->close();
?>

</div>


<?php include 'adminFooter.php';?>



