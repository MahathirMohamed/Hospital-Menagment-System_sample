<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>

    <script src="https://kit.fontawesome.com/2759fd8f76.js" crossorigin="anonymous"></script>

    <!--Boostrab Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!--Css Link-->
    <link rel="stylesheet" href="style.css">

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
</head>

<body>

    <?php
    include 'ajax.php';
    ?>

    <!-- Header-->
    <header class="sticky-top">
        <nav class="navbar navbar-expand navbar-light " style="background-color: #e3f2fd;">
            <div class="container-fluid font-weight-bold">
                <a href="#" class="navbar-brand d-lg-block ml-lg-5">

                </a>

                <div>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['email']; ?>
                                <img src="https://cdn.pixabay.com/photo/2020/07/14/13/07/icon-5404125_1280.png" alt="" width="30" height="30" loading="lazy" class="d-inine-block rounded-circle">
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">My Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->



    <div class="container-fulid">
        <div class="row">
            <div class="col-xl-2 d-xl-block bg-dark" id="navbarSupportedContent" style="height: 100vh">

                <div class="btn">

                </div>

                <div>
                    <button class="btn" onclick="loadfiles('Dashbord','loadArea')"><i class="fas fa-tachometer-alt"></i><span>Dashbord</span></button>
                </div>

                <div>
                    <button class="btn" onclick="loadfiles('ViewDoctor','loadArea')"><i class="fas fa-user-md" aria-hidden="true"></i><span>View Doctores</span></button>
                </div>

                <div>
                    <button class="btn" onclick="loadfiles('NewDoctors','loadArea')"><i class="fas fa-user-md"></i><span>Appointment</span></button>
                </div>

                <div>
                    <button class="btn" onclick="loadfiles('Medicine','loadArea')"><i class="fas fa-medkit"></i><span>Medician</span></button>
                </div>

                <div>
                    <button class="btn" onclick="loadfiles('ViewMedicine','loadArea')"><i class="fas fa-medkit"></i><span>View Medician</span></button>
                </div>


                <div class="p-3" style="margin-top: 280px;">
                    <form action="logout.php" method="post">
                        <input type="submit" class="btn btn-danger text-center" value="Logout">
                    </form>
                </div>
            </div>

            <!-- Right Area-->

            <div class="col-xl-10 bg-light" id="loadArea">


                <!-- Row -->
                <div class="row">
                    <div class="col pa10">
                        <div class="card mt-5">
                            <div class="card">
                                <h3 class="card-header text-uppercase bg-info text-white">Dashbord</h3>
                                <div class="card-body">

                                    <div class="row">
                                        <!--student col-->
                                        <div class="col-lg-6 pa10">
                                            <!-- student cart-->
                                            <div class="card m-auto">
                                                <div class="card-header fw-bold bg-secondary text-white">
                                                    Doctors
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                    include 'PHP/conn.php';

                                                    $sql = "SELECT ID FROM doctor";

                                                    $query_run = mysqli_query($con, $sql);

                                                    $row = mysqli_num_rows($query_run);

                                                    echo $row;
                                                    ?>
                                                    <p class="card-text">All Doctors</p>
                                                </div>
                                            </div>
                                            <!-- End student cart-->
                                        </div>
                                        <!--end col-->

                                        <!--Lacutre col-->
                                        <div class="col-lg-6 pa10">
                                            <!-- student cart-->
                                            <div class="card m-auto">
                                                <div class="card-header fw-bold bg-secondary text-white">
                                                    Medician
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title counter">
                                                        <?php
                                                        include 'PHP/conn.php';

                                                        $sql = "SELECT ID FROM medicine";

                                                        $query_run = mysqli_query($con, $sql);

                                                        $row = mysqli_num_rows($query_run);

                                                        echo $row;
                                                        ?>
                                                    </h5>
                                                    <p class="card-text">All Medician</p>
                                                </div>
                                            </div>
                                            <!-- End luctre cart-->
                                        </div>
                                        <!--end luctre col-->

                                        
                                    </div>
                                    <!-- End Row -->

                                </div>
                                <!-- End Right Area -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="script.js"></script>

        <script src="js/validation/jquery.validate.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>