<?php include 'header.php';

$conn=mysqli_connect("localhost","root","","malcolm_studio");
$sql = "SELECT * FROM portfolio";
$data_all = $conn->query($sql);
?>?>


<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio-section portfolio-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Memories</h2>
                    </div>
                    <div class="filter-controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <!-- <li data-filter=".fashion">Fashion</li> -->
                            <li data-filter=".natural">Natural</li>
                            <li data-filter=".lifestyle">Lifestyle</li>
                            <li data-filter=".wedding">Wedding</li>
                            <!-- <li data-filter=".videos">Videos</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="portfolio-filter">
                    <?php
                        while ($row = mysqli_fetch_assoc($data_all)) {
                            ?>
                        <div class="pf-item set-bg <?php echo $row["category"] ?>" data-setbg="<?php echo $row["image"] ?>">
                        </div>
                        <?php
                       }
                            ?>
<!--                     
                        <div class="pf-item large-width set-bg natural" data-setbg="img/natural3.jpg">
                        </div> -->
                    
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    <!-- Portfolio Section End -->

    <?php include 'footer.php';?>