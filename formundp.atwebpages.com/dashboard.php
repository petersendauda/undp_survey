<?php
include('include/dbcon.php');
// include('include/session.php');

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin | Dashboard</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!--************************
             CSS FILES
             *************************** -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--************************
                        HEADER
             *************************** -->
    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="dashboard.php" class="logo">
                    <img src="assets/img/favicon.png" alt="Logo">
                </a>
                <a href="dashboard.php" class="logo logo-small">
                    <img src="assets/img/favicon.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search" style="margin: 15px; padding-left: 50px">
                <h3 class="page-title" style="font-size: 25px">Admin Panel</h3>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/favicon.png" width="31" alt="Ryan Taylor">

                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <!-- <a class="dropdown-item" href="profile.php">My Profile</a> -->
                        <a class="dropdown-item" href="index.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li>
                            <a href="dashboard.php"><i class="feather-grid"></i> <span> Home</span> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Admin</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!--************************
             COUNTS THE NUMBER OF SURVEY Participants
             *************************** -->
                <div class="row">
                    <div class="col-xl-4 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Survey Participants</h6>
                                        <div class="d-flex flex-wrap">
                                            <?php
                                            $data = mysqli_query($sql_con, "SELECT * FROM survey");
                                            $row = mysqli_num_rows($data); ?>
                                            <h2 class="fs-40 font-w600 text-dark mb-0 mr-3">
                                                <?php echo $row ?>

                                            </h2>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--************************
             COUNTS THE DIFFERENT DISTRICTS OF SURVEY Participants
             *************************** -->
                    <div class="col-xl-4 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Districts</h6>
                                        <div class="d-flex flex-wrap">
    <?php
    $data = mysqli_query($sql_con, "SELECT COUNT(DISTINCT district) as district_count FROM survey");
    $row = mysqli_fetch_assoc($data); 
    ?>
    <h2 class="fs-40 font-w600 text-dark mb-0 mr-3">
        <?php echo $row['district_count']; ?>
    </h2>
    <div></div>
</div>

                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--************************
             COUNTS THE TOTAL AMOUNT OF THE $50 SENT TO SURVEY PARTICIPANTS
             *************************** -->
                    <div class="col-xl-4 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Amount Sent</h6>
                                        <div class="d-flex flex-wrap">
                                            <?php
                                            $data = mysqli_query($sql_con, "SELECT * FROM survey where wallet_address != ''");
                                            $row = mysqli_num_rows($data) * 50; ?>
                                            <h2 class="fs-40 font-w600 text-dark mb-0 mr-3">
                                                <?php echo "$";
                                                echo $row ?>

                                            </h2>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--************************
             APEXCHARTS CARDS
             *************************** -->
                <!--OCCUPATION  -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">OCCUPATION</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart3"></div>
                            </div>
                        </div>
                    </div>
                    <!-- MONTHLY INCOME -->
                    <div class="col-md-12 col-lg-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Monthly Income</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--GENDER  -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Average Monthly Earnings per Gender</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                        <!-- DISTRICTS -->
                        <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Average Monthly Earnings per District</h5>
                                    </div>
                                    <div class="col-6">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart1"></div>
                            </div>
                        </div>

                    </div>
                     <!-- AGE CATEGORY -->
                     <div class="col-md-12 col-lg-6">

<div class="card card-chart">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-6">
                <h5 class="card-title">Average Monthly Earnings per Age Category</h5>
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div id="chart5"></div>
    </div>
</div>

</div>
<!-- AVERAGE INCOME -->
<div class="col-md-12 col-lg-6">

<div class="card card-chart">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-6">
                <h5 class="card-title">Total Average Monthly Earnings</h5>
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div id="chart6"></div>
    </div>
</div>

</div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex">
                    </div>
                </div>


                <!--************************
             FOOTER
             *************************** -->
                <footer>
                    <p>Copyright © 2024 UNDP.</p>
                </footer>

            </div>

        </div>
    </div>
    </div>
    <!--************************
             APEXCHARTS
             *************************** -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- OCCUPATION -->
    <?php
    $occupation = array();
    $sql = "SELECT occupation, COUNT(*) as Occupation FROM survey 
GROUP BY occupation";
    $result = mysqli_query($sql_con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $occupation[] = array("x" => $row["occupation"], "y" => $row["Occupation"]);
    }
    ?>

    <script>

        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: 'Number',
                data: <?php echo json_encode($occupation); ?>
            }],
            xaxis: {
                categories: []
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart3"), options);

        chart.render();
    </script>
     <!-- MONTHLY INCOME -->
     <?php
    $monthly_income = array();
    $sql = "SELECT monthly_income, COUNT(*) as Income FROM survey 
GROUP BY monthly_income";
    $result = mysqli_query($sql_con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $monthly_income[] = array("x" => $row["monthly_income"], "y" => $row["Income"]);
    }
    ?>

    <script>

        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: 'Number',
                data: <?php echo json_encode($monthly_income); ?>
            }],
            xaxis: {
                categories: []
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart4"), options);

        chart.render();
    </script>

    <!-- GENDER -->
    <?php
    $gender = array();
    $sql = "SELECT gender, ROUND(AVG(monthly_income),2) as Gender FROM survey 
GROUP BY gender";
    $result = mysqli_query($sql_con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $gender[] = array("x" => $row["gender"], "y" => $row["Gender"]);
    }
    ?>
    <script>

        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: 'Number',
                data: <?php echo json_encode($gender); ?>
            }],
            xaxis: {
                categories: []
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>

    <!-- DISTRICTS -->
    <?php
    $district = array();
    $sql = "SELECT district, ROUND(AVG(monthly_income),2) as District FROM survey 
GROUP BY district";
    $result = mysqli_query($sql_con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $district[] = array("x" => $row["district"], "y" => $row["District"]);
    }
    ?>
    <script>

        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: 'Number',
                data: <?php echo json_encode($district); ?>
            }],
            xaxis: {
                categories: []
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart1"), options);

        chart.render();
    </script>

     <!-- Age Category -->
     <?php
    $agecategory = array();
    $sql = "SELECT agecategory, ROUND(AVG(monthly_income),2) as Age FROM survey 
GROUP BY agecategory";
    $result = mysqli_query($sql_con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $agecategory[] = array("x" => $row["agecategory"], "y" => $row["Age"]);
    }
    ?>
    <script>

        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: 'Number',
                data: <?php echo json_encode($agecategory); ?>
            }],
            xaxis: {
                categories: []
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart5"), options);

        chart.render();
    </script>
     <!-- AVERAGE EARNINGS -->
     <?php
    $monthly_income = array();
    $sql = "SELECT ROUND(AVG(monthly_income),3) as Total_Average_Income FROM survey";
    $result = mysqli_query($sql_con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $monthly_income[] = array("x" => 'Total Average Income', "y" => $row["Total_Average_Income"]);
    }
    ?>
    <script>

        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: 'Number',
                data: <?php echo json_encode($monthly_income); ?>
            }],
            xaxis: {
                categories: []
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart6"), options);

        chart.render();
    </script>

    <!--************************
             JAVASCRIPT FILES
             *************************** -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/script.js"></script>
</body>


</html>