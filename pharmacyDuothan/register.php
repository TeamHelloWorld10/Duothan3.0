<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pharmacy Management System </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">

    <style>
    .signup_wrapper {
        right: 0px;
        margin: 0px auto;
        margin-top: 10%;
        max-width: 850px;
        position: relative;
    }

    .col-sm h4 {
        padding-left: 10px;
        padding-bottom: 10px;
    }
    </style>

    <div class="signup_wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <center><img src="build/images/logo.png" alt="..." width="200"></center>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="registrationForm"  name="registration" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="">
                                <div class="row">
                                    <div class="col-sm">
                                        <h4>User Details</h4>
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    placeholder="User Name" name="firstname" id="firstname"">
                                                <span class="fa fa-user form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    placeholder="Address" id="u_address">
                                                <span class="fa fa-map-pin form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    placeholder="Mobile" id="user_phone_number">
                                                <span class="fa fa-phone form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    placeholder="Email" name="email" id="email">
                                                <span class="fa fa-envelope form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                                <input type="password" class="form-control has-feedback-left"
                                                    placeholder="Password" name="password" id="password">
                                                <span class="fa fa-lock form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                                <input type="password" class="form-control has-feedback-left"
                                                    placeholder="Conform Password" id="conform_password">
                                                <span class="fa fa-lock form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <h4>&nbsp;</h4>
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    placeholder="Pharmacy Name" name="lastname" id="lastname">
                                                <span class="fa fa-lock form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    placeholder="Address" id="address">
                                                <span class="fa fa-map-pin form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    placeholder="Phone Number" id="phone_number">
                                                <span class="fa fa-phone form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                      
                                        
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                    placeholder="License" id="pharmacy_license">
                                                <span class="fa fa-certificate form-control-feedback left"
                                                    aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12">
                                    <center>
                                        <a href="index.php" class="btn"
                                            style="background-color: rgb(22, 104, 122);color: rgb(255, 255, 255);">Back</a>
                                        <a href="cashier" class="btn"
                                            style="background-color: rgb(121,146,168);color: rgb(255, 255, 255);">Register</a>
                                    </center>
                                </div>
                            </div>

                        </form>



                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <script src="user/js/index.js"></script>
</body>

</html>