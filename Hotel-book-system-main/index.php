<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Independent Paradise -  Home</title>

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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>


    <!-- Navbar -->
    <?php require('include/header.php') ?>


    <!-- Carousel -->

    <div id="carouselExampleRide" class="carousel slide carousel-fade" data-bs-ride="true">
        <div class="carousel-inner p-4">
            <div class="carousel-item active">
                <img src="images/caro1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/caro2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/caro3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/caro4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/caro5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/caro6.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!-- RoomAvailability -->


    <div class="container roomAvailable">
        <div class="row">
            <div class="col-lg-12 bg-white shadow px-5 py-4 rounded">
                <h5 class="fs-4 fw-bolder mb-4">Check Room Availability</h5>
                <form action="">
                    <div class="row align-items-end d-flex justify-content-evenly">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-bold">Check-In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-bold">Check-Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>

                        <div class="col-lg-2 mb-3">
                            <label class="form-label fw-bold">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label fw-bold">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3">
                            <a type="submit" href="rooms.php" class="btn btn-outline-dark shadow-none custom-btn">Submit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 shadow">
                    <img src="images/room1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">৳300 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-dark">Book Now</a>
                            <a href="#" class="btn btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 shadow">
                    <img src="images/room2.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">৳300 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-dark">Book Now</a>
                            <a href="#" class="btn btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 shadow">
                    <img src="images/room3.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">৳300 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-dark">Book Now</a>
                            <a href="#" class="btn btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn px-2 py-2 btn-outline-dark rounded fw-bold">More Rooms</a>
            </div>
        </div>
    </div>



    <!-- Contact Us -->

    <h2 class="mt-5 pt-4 text-center fw-bold h-font">Contact Us</h2>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-3 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2425.698399290861!2d90.42654438335369!3d23.816231068510753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64be6744a57%3A0xeacead51ebe2bf60!2sIndependent%20University%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1692034169709!5m2!1sen!2sbd" height="320" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a class="d-inline-block mb-2 text-decoration-none text-dark" href="tel:+8801711213112"><i class="bi bi-telephone-fill"></i>+8801711213112</a>
                    <br>
                    <a class="d-inline-block mb-2 text-decoration-none text-dark" href="tel:+8801711213112"><i class="bi bi-telephone-fill"></i>+8801711213112</a>
                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a class="d-inline-block mb-3 text-decoration-none me-1" href="#">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-twitter me-1"></i>Twitter</span>
                    </a>

                    <a class="d-inline-block mb-3 text-decoration-none me-1" href="#">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook me-1"></i>Facebook</span>
                    </a>

                    <a class="d-inline-block mb-3 text-decoration-none me-1" href="#">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-instagram me-1"></i>Instagram</span>
                    </a>

                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php require('include/footer.php') ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>