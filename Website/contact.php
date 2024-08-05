<?php include 'header.php';?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-text">
                        <h3>Get in touch</h3>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Address</h5>
                                <p>333 Winchendon Rd, North West Coast, Scotland</p>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>125-711-811</li>
                                    <li>125-668-886</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Email</h5>
                                <p>malcolm_studio@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-form">
                        <h3>Work with Me!</h3>

                        <?php 
                        $success_message = isset($_GET['success']) ? $_GET['success'] : "";
                        if (!empty($success_message)) : 
                        ?>
                        <div class="alert alert-success mt-3">
                            <?php 
                            echo $success_message; 
                            ?>
                        </div>
                        <script>
                            setTimeout(function() {
                                window.location.href = 'contact.php';
                            }, 3000); 
                        </script>
                        <?php endif ; ?>

                        <form method="POST" action="saveData.php" onsubmit="return validateForm()">
                            <label for="date">Name</label>
                            <input type="text" name="name">
                            <label for="date">Email</label>
                            <input type="text" name="email">
                            <label for="date">Appointment Date</label>
                            <input type="date" name="date">
                            <label for="date">Contact No</label>
                            <input type="text" name="contact">
                            <label for="date">Message</label>
                            <textarea name="message" ></textarea>
                            <div id="error-msg" class="alert alert-danger mt-3 d-none"></div>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>

                        <script>

    
function validateForm() {
    var name = document.querySelector('input[name="name"]').value.trim();
    var email = document.querySelector('input[name="email"]').value.trim();
    var date = document.querySelector('input[name="date"]').value.trim();
    var contact = document.querySelector('input[name="contact"]').value.trim();
    var message = document.querySelector('textarea[name="message"]').value.trim();



    if (name === '') {
      document.getElementById('error-msg').innerText = 'Please fill Your Name.';
      document.getElementById('error-msg').classList.remove('d-none');
      return false;
    }

    if (email === '') {
      document.getElementById('error-msg').innerText = 'Please fill Email Address.';
      document.getElementById('error-msg').classList.remove('d-none');
      return false;
    }

    if (date === '') {
      document.getElementById('error-msg').innerText = 'Please fill Appointment Date.';
      document.getElementById('error-msg').classList.remove('d-none');
      return false;
    }

    if (contact === '') {
      document.getElementById('error-msg').innerText = 'Please fill Mobile Number.';
      document.getElementById('error-msg').classList.remove('d-none');
      return false;
    }
    if (message === '') {
      document.getElementById('error-msg').innerText = 'Please fill Message.';
      document.getElementById('error-msg').classList.remove('d-none');
      return false;
    }
  }
</script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <?php include 'footer.php';?>