<?php include 'header.php';

$conn=mysqli_connect("localhost","root","","malcolm_studio");
$sql = "SELECT * FROM pricing";
$data_all = $conn->query($sql);
?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Pricing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title pricing-title">
                        <h2>service & optimal price</h2>
                    </div>
                </div>
            </div>
            <div class="row" style="justify-content:center;">
                <?php
                        while ($row = mysqli_fetch_assoc($data_all)) {
                            ?>
                <div class="col-lg-3 col-md-6 m-2">
                    <div class="pricing-item">
                        <div class="pi-price">
                            <h2>$<?php echo $row["price"] ?></h2>
                        </div>
                        <div class="pi-title">
                            <h3><?php echo $row["titile"] ?></h3>
                        </div>
                        <div class="pi-text">
                            <ul>
                                <li><?php echo $row["description"] ?></li>
                            </ul>
                            <a href="./contact.php" class="primary-btn2">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <?php
                       }
                            ?>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->



    <?php include 'footer.php';?>