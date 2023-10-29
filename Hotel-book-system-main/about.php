<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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
    .box:hover {
        border-top-color: #37A6A0 !important;
    }
</style>
<body>
    

<!-- Navbar -->
<?php require('include/header.php') ?>

<!-- About -->
<div class="my-5 px-4">
    <h2 class="fw-bold text-center text-uppercase">About Us</h2>
    <div class="bg-dark"></div>
    <p class="text-center mt-3 px-5">Greetings from your friends at the Hotel! Last year you told me how much you enjoyed your dinner at Little Italy Café down the street. Would you like me to make you a reservation for Saturday night?</p>
</div>
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-5 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
            <h3 class="mb-3">Welcome to Our Hotel</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure debitis voluptatem obcaecati quis odio explicabo doloribus perspiciatis quibusdam dolores illum reprehenderit nam, voluptates totam, porro ut qui praesentium minima blanditiis!</p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="./img/about-me.jpg" alt="about" class="w-100">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4 h-100">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="./img/hotel-svg.svg" alt="" width="70px">
                <h4 class="mt-3 text-uppercase">100+ Rooms</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4 h-100">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="./img/customers-svg.svg" alt="" width="70px">
                <h4 class="mt-3 text-uppercase">200+ Customers</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4 h-100">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="./img/reviews-svg.svg" alt="" width="70px">
                <h4 class="mt-3 text-uppercase">130+ Reviews</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4 h-100">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="./img/staffs-svg.svg" alt="" width="70px">
                <h4 class="mt-3 text-uppercase">200+ Staffs</h4>
            </div>
        </div>
    </div>
</div>

<h3 class="text-uppercase mt-5 fw-bold text-center">Management Teams</h3>
<section class="pt-4 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-dark mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-dark mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card rounded-3 overflow-hidden border-0">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1776&q=80">
                                        <div class="card-body bg-light">
                                            <h4 class="card-title text-center">Kelly Sikkema</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card rounded-3 overflow-hidden border-0">
                                        <img class="img-fluid" alt="100%x280" src="https://plus.unsplash.com/premium_photo-1671823917954-dc943c1bd9df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80">
                                        <div class="card-body bg-light">
                                            <h4 class="card-title text-center">Levi Meir Clancy</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card rounded-3 overflow-hidden border-0">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1504593811423-6dd665756598?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80">
                                        <div class="card-body bg-light">
                                            <h4 class="card-title text-center">Mubariz Mehdizadeh</h4>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card rounded-3 overflow-hidden border-0">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1500048993953-d23a436266cf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80">
                                        <div class="card-body bg-light">
                                            <h4 class="card-title text-center">Ethan Hoover</h4>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card rounded-3 overflow-hidden border-0">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1593104547489-5cfb3839a3b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1153&q=80">
                                        <div class="card-body bg-light">
                                            <h4 class="card-title text-center">Michael Austin</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card rounded-3 overflow-hidden border-0">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80">
                                        <div class="card-body bg-light">
                                            <h4 class="card-title text-center">christian Buehner</h4>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card rounded-3 overflow-hidden border-0">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1607346256330-dee7af15f7c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1206&q=80">
                                        <div class="card-body bg-light">
                                            <h4 class="card-title text-center">Naim Ahmed</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card rounded-3 overflow-hidden border-0">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80">
                                        <div class="card-body bg-light">
                                            <h4 class="card-title text-center">Edward Cisneros</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card rounded-3 overflow-hidden border-0">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1525875975471-999f65706a10?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80">
                                        <div class="card-body bg-light">
                                            <h4 class="card-title text-center">Noémi Macavei-Katócz</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about -->

<!-- footer -->
<?php require('include/footer.php') ?>

<!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>