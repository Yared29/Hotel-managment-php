<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>PARADISE HOTEL</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PARADISE HOTEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block mx-auto mb-4" src="../assets/images/1.jpg" alt="">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Welcome to Paradise Hotel.</h1>
                            <p>A greate place to refreash your mind.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block mx-auto mb-4" src="../assets/images/2.jpg" alt="">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>With the best Cheff in town..</h1>
                            <p>Enjoy our special dishes.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block mx-auto mb-4" src="../assets/images/3.jpg" alt="">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Our luxurious beds will satisfy your need.</h1>
                            <p>With our quality bed you will love your vacations.</p>

                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="../assets/logo.png" alt="" width="150" height="150">
                <h1 class="display-5 fw-bold">PARADISE HOTEL</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Reserve a room and enjoy our delicoius foods with comfortable bed.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="reserveRoom.php" type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Book Now</a>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img class="mb-4" src="../assets/singleBed.jpg" alt="" width="300" height="300">

                    <h2>Single</h2>
                    <p>A room with one bed and a beautiful view.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="mb-4" src="../assets/deluxeBed.jpg" alt="" width="300" height="300">
                    <h2>Deluxe</h2>
                    <p>A room with bed that's clean and neat, a kitchen and living room is also included.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="mb-4" src="../assets/familyBed.jpg" alt="" width="300" height="300">
                    <h2>Family</h2>
                    <p>A room with 3 beds, a kitchen, a mini bar and living room, suitable for family.</p>

                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">BEST HOTEL AWARD WINNER.<span class="text-muted">It’ll blow your
                            mind.</span></h2>
                    <p class="lead">Paradise hotel won the best hotel award in 2020.</p>
                </div>

            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
                            yourself.</span></h2>
                    <p class="lead">Our customers are our top priorities.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="mb-4" src="../assets/images/g3.jpg" alt="" width="400" height="400">

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Come and. <span class="text-muted">Visit Us.</span></h2>
                    <p class="lead">You will enjoy your time here in PARADISE HOTEL.</p>
                </div>
                <div class="col-md-5">
                    <img class="mb-4" src="../assets/images/g2.jpg" alt="" width="400" height="400">

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2017–2021 PARADISE HOTEL. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>


    <script src="../assets/bootstrap.bundle.min.js"></script>


</body>

</html>