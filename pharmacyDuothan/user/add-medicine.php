<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php';?>

<body class="nav-md">
    <?php include 'include/sidebar.php';?>
    <?php include 'include/menufooter.php';?>
    </div>
    </div>

    <?php include 'include/topnav.php';?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h4><i class="fa fa-medkit"></i> Add Medicine</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="x_panel">
                <div class="x_title">
                    <h2>Medicine Information</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">



                    <!-- <form id="medicineForm" data-parsley-validate class="form-horizontal form-label-left"> -->
                        <div class="row">


                            <div class="col-md-4 col-sm-4">
                                <input id="drug_name" type="text" class="form-control has-feedback-left"
                                    placeholder="Drug Name">
                                <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-4 col-sm-4">

                                <input id="manufacturer" type="text" class="form-control has-feedback-left"
                                    placeholder="Manufacturer">

                                <!-- <select class="form-control">
                            <option>Select Category</option>
                            <option>Antimalarials</option>
                            <option>Antimetabolites</option>
                            <option>Antineoplastic Agents</option>
                            <option>Antioxidants</option>
                          </select> -->
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <input id="supplier" type="text" class="form-control has-feedback-left"
                                    placeholder="Supplier">

                            </div><br><br><br>

                            <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" placeholder="Medicine Description"></textarea>
                            </div><br><br><br><br>

                            <div class="col-md-4 col-sm-4">
                                <input id="ndc" type="number" class="form-control has-feedback-left"
                                    placeholder="NDC (National Drug Code)">
                                <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                            </div>



                            <div class="col-md-4 col-sm-4">
                                <input id="quantity" type="text" class="form-control has-feedback-left"
                                    placeholder="Quantity">
                                <span class="fa fa-hourglass-o form-control-feedback left" aria-hidden="true"></span>
                            </div>


                            <div class="col-md-4 col-sm-4">
                                <input id="unit_price" type="text" class="form-control has-feedback-left"
                                    placeholder="Unit Price">
                                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                            </div><br><br><br>


                            <div class="col-md-4 col-sm-4">
                                <input id="expiration_date" type="date" class="form-control has-feedback-left"
                                    placeholder="">
                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                            </div><br><br><br>

                            <div class="col-md-12 col-sm-12 ">
                                <a href='medicine.php' style="color:white;" class="btn btn-primary"
                                    type="button">Cancel</a>
                                <button id="medicineSubmit" style="color:white;" type="submit"
                                    class="btn btn-success">Submit</button>
                            </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php include 'include/footer.php';?>
</body>

</html>