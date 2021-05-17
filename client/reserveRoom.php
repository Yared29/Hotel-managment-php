<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reserve Room</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">


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
    <link href="../css/signin.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>


            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../assets/logo.png" alt="" width="150" height="150">
                <h2>Reserve Hotel Room</h2>
                <p class="lead">Hotel Whatever</p>
            </div>
            <?php if(isset($_SESSION['alertMsg'])){?>
            <div class="alert alert-success">
                <?php echo $_SESSION['alertMsg']?>
                <?php unset($_SESSION['alertMsg'])?>
                <?php unset($_SESSION['alert_type'])?>
            </div>
            <?php }?>
            <div class="row justify-content-md-center g-5 p-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Please Choose Bed Type And Enter Your Address</h4>
                    <form action="../services/roomActions.php" method="POST" class="needs-validation" name="bookForm"
                        novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="bedType" class="form-label">Bed Type</label>
                                <select class="form-select" id="bedType" required name="bedType">
                                    <option value="">Choose...</option>
                                    <option>Single</option>
                                    <option>Family</option>
                                    <option>Deluxe</option>
                                    <option>Double</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid Room.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="roomType" class="form-label">Bed Type</label>
                                <select class="form-select" id="roomType" required name="roomType">
                                    <option value="">Choose...</option>
                                    <option>With Kitchen</option>
                                    <option>Without Kitchen</option>
                                    <option>With Livingroom</option>
                                    <option>Without Livingroom</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid Bed.
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="menu" class="form-label">Menu Type</label>
                                <select class="form-select" id="menu" required name="menu">
                                    <option value="">Choose...</option>
                                    <option>None</option>
                                    <option>Half</option>
                                    <option>Full</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid Menu.
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Check-In</label>
                                        <input name="checkIn" type="date" class="form-control" required>
                                        <div class="invalid-feedback">
                                            You must select check in date.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Check-Out</label>
                                        <input name="checkOut" type="date" class="form-control" required>
                                        <div class="invalid-feedback">
                                            You must select check out date.
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required
                                    name="firstName">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input class="form-control" type="text" id="lastName" required name="lastName">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="phone" class="form-label">Phone</label>
                                <div class="input-group has-validation">
                                    <input type="number" class="form-control" id="phone" placeholder="Phone Number"
                                        required name="phone">
                                    <div class="invalid-feedback">
                                        Your phone number is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span
                                        class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com"
                                    name="email">
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required
                                    name="address">
                                <div class="invalid-feedback">
                                    Please enter your address.
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" id="country" required name="country">
                                    <option value="">Choose...</option>
                                    <option>Ethiopia</option>
                                    <option>Non Ethiopian</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <hr class="my-4">

                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit" name="reserve">Reserve the
                                room</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017–2021 Paradise Hotel</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <script src="../assets/bootstrap.bundle.min.js"></script>
    <script src="../js/form-validation.js"></script>
</body>

</html>