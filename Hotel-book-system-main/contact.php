<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
</style>

<body>


    <!-- Navbar -->
    <?php require('include/header.php') ?>

    <!-- Contact -->
    <div class="my-5 px-4">
        <h2 class="fw-bold text-center text-uppercase">Contact Us</h2>
        <div class="bg-dark"></div>
        <p class="text-center mt-3 px-5">Looking for more information or want to try our Hotel plans? Submit your information and we will follow up with you as soon as possible.</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded-3 shadow p-4">
                    <iframe class="w-100 mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2425.698399290861!2d90.42654438335369!3d23.816231068510753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64be6744a57%3A0xeacead51ebe2bf60!2sIndependent%20University%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1692034169709!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/rCL3kB8deRB3HvGd9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="fa-solid fa-location-dot"></i> Plot 16 Aftab Uddin Ahmed Rd, Dhaka 1229
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +09612939393" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="fa-solid fa-phone"></i> +09612939393
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: info@iub.edu.bd" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="fa-solid fa-envelope"></i> info@hotel.com</i>
                    </a>
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="d-inline-block text-dark fs-5"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST" id="myForm">
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Name</label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Email</label>
                            <input name="email" required type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Subject</label>
                            <input name="subject" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Message</label>
                            <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none"></textarea>
                        </div>
                        <button name="send" type="submit" class="btn btn-dark text-white text-uppercase mt-3 shadow-none">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End contact -->



    <?php

    if (isset($_POST['send'])) {

        // Check the connection


        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $name = mysqli_real_escape_string($con, $name);
        $email = mysqli_real_escape_string($con, $email);
        $subject = mysqli_real_escape_string($con, $subject);
        $message = mysqli_real_escape_string($con, $message);


        $q = "INSERT INTO `user_message`(`name`, `email`, `subject`, `message`) VALUES('$name', '$email', '$subject', '$message')";



        if ($con->query($q) === TRUE) {
            echo '<div class="alert custom-alert alert-success alert-dismissible fade show" role="alert">
                <strong>Mail Sent!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } else {
            echo '<div class="alert custom-alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failed! Try Again Later.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        $con->close();
    }

    ?>

    <!-- footer -->
    <?php require('include/footer.php') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>