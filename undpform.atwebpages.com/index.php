<?php

include ("include/dbcon.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailaddress = $_POST['emailaddress'];
    $phonenumber = $_POST['phonenumber'];
    $agecategory = $_POST['agecategory'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $monthly_income = $_POST['monthly_income'];
    $wallet_address = $_POST['wallet_address'];
    $district = $_POST['district'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];



    $data = mysqli_query($sql_con, "INSERT INTO survey(name, emailaddress, phonenumber, agecategory, gender, occupation, monthly_income, wallet_address, district, date, month, year) VALUES ('$name','$emailaddress','$phonenumber','$agecategory','$gender','$occupation','$monthly_income','$wallet_address','$district','$date','$month','$year')");

    if ($data) {
        echo "<script>alert('Submitted  Successfully!!')</script>";
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "Failed:" . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Input Form by Tooplate</title>
    <link rel="shortcut icon" href="img/undplogo.png">
    <!--*********************************************
                                        CSS FILES
                    **********************************************-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body id="register">
    <div class="container">
        <div class="row tm-register-row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-l">
                <!--*********************************************
                                        FORM Start
                    **********************************************-->
                <form action="" method="post">
                    <p style="color: #888;">Personal Info.</p>
                        <!--*********************************************
                                        Personal Info.
                    **********************************************-->
                    <div class="input-field">
                        <input placeholder="Name*" id="name" name="name" type="text" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Email*" id="emailaddress" name="emailaddress" type="email" class="validate"
                            required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Phone Number" id="phonenumber" name="phonenumber" type="text"
                            class="validate">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 tm-pr-xs-0">
                            <select name="agecategory" required>
                                <option value="-">Age Category<span class="login-danger">*</span></option>
                                <option value="Teenager">Teenager</option>
                                <option value="Young Adult">Young Adult</option>
                                <option value="Middle Age">Middle Age</option>
                                <option value="Adult">Adult</option>
                                <option value="Old Age">Old Age</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 tm-pr-xs-0">
                            <select name="gender" required>
                                <option value="-">Gender<span class="login-danger">*</span></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                        <!--*********************************************
                                        Earning Info.
                    **********************************************-->
                    <p style="color: #888;">Earning Info.</p>
                    <div class="input-field">
                        <input placeholder="Your Occupation*" id="occupation" name="occupation" type="text"
                            class="validate">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 tm-pr-xs-0">
                            <select name="monthly_income" required>
                                <option value="-">Income per Month<span class="login-danger">*</span></option>
                                <option value="400">Below Le 500</option>
                                <option value="500">Le 500</option>
                                <option value="900">Above Le 500</option>
                                <option value="1000">Le 1000</option>
                                <option value="1500">Above Le 1000</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 tm-pr-xs-0">
                            <select name="district" required>
                                <option>District<span class="login-danger">*</span></option>
                                <option value="Freetown">Freetown</option>
                                <option value="Bo">Bo</option>
                                <option value="Makeni">Makeni</option>
                                <option value="Kenema">Kenema</option>
                                <option value="Bonthe">Bonthe</option>
                                <option value="Kono">Kono</option>
                                <option value="Kailahun">Kailahun</option>
                                <option value="Tonkolili">Tonkolili</option>
                            </select>
                        </div>
                    </div>
                                                                <!--*********************************************
                                        Wallet
                    **********************************************-->
                    <div class="input-field">
                        <input placeholder="Wallet Address" id="wallet_address" name="wallet_address" type="text"
                            class="validate">
                    </div>
                    <div class="row">
                        <div class="mb-2">
                            <label class="mr-4">
                                <input class="with-gap" name="" type="checkbox" value="Receive Email" />
                                <span>Receive Email*</span>
                            </label>
                        </div>
                    </div>
                                                                <!--*********************************************
                                    HIDDEN INPUTS:    Date, Month Year
                    **********************************************-->
                    <input type="hidden" class="form-control" id="val-name" name="date"
                        value="<?php echo date("F j, Y"); ?>">
                    <input type="hidden" class="form-control" id="val-name" name="month"
                        value="<?php echo date("F"); ?>">
                    <input type="hidden" class="form-control" id="val-name" name="year"
                        value="<?php echo date("Y"); ?>">
                    <div class="text-right mt-4">
                        <button type="submit" name="submit"
                            class="waves-effect btn-large btn-large-white px-4 black-text">Submit</button>
                    </div>
                </form>
            </div>
                <!--*********************************************
                                        FORM ENDS
                    **********************************************-->


                        <!--*********************************************
                                        SURVEY DESCRIPTION
                    **********************************************-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-r">
            <header class="mb-5">
                    <h3 class="mt-0 text-white">UNDP Survey</h3>
                    <p class="grey-text">This is a Survey carried out by UNDP to assess the earning level of workers in
                        various districts in Sierra Leone.</p>
                    <p class="grey-text">Be rest assured that the data collected is confidential, and will only be used
                        for the above purpose.
                    </p>
                    <p class="grey-text">After submitting this form, you will receive a sum of $50 in your Solana Wallet
                        Address for helping us carry out the Survey.</p>
                    <p class="grey-text">Share this form to workers and people who earn so as to help us get as much
                        data as possible.
                    </p>
                    <p class="grey-text"><u><a href="earn.christex.foundation">Christex Foundation bounty</a></u></p>
                </header>

            </div>
        </div>
                        <!--*********************************************
                                        FOOTER STARTS
                    **********************************************-->
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12">
                <p class="text-center grey-text text-lighten-2 tm-footer-text-small">
                    Copyright &copy; 2024
                    <a rel="nofollow" href="https://github.com/petersendauda" class="tm-footer-link">UNDP</a>
                </p>
            </div>
        </footer>
    </div>
                <!--*********************************************
                                        FOOTER ENDS
                    **********************************************-->

                        <!--*********************************************
                                        SCRIPT FILES
                    **********************************************-->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>