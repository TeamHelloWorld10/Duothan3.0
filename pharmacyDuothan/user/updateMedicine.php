<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php';
require('php/conn.php');
?>

<body class="nav-md">
    <?php include 'include/sidebar.php';?>
    <?php include 'include/menufooter.php';?>
    </div>
    </div>

    <?php include 'include/topnav.php';

    function getData($conn, $sql){
        $result = mysqli_query($conn, $sql);
       
        if(! $result ) {
            die('Could not get data: ' .  mysqli_connect_error()());
        }
        return $result;
    }

    
    if(isset($_GET['id'])){
        $drugId=$_GET['id'];
        $sql="SELECT * FROM `drugs` WHERE id=$drugId";
        $result=getData($conn, $sql);
        $row = mysqli_fetch_array($result);
       

        echo'<p style="display:none" id="idPham">'.$row['id'].'<p>';


    }else{
        echo "<script>
        window.location.href='medicine.php';
    </script>"; 
    }
    
    
    ?>




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
                                placeholder="Drug Name" value = "<?php echo  $row[1];?>">
                            <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-4 col-sm-4">

                            <input id="manufacturer" type="text" class="form-control has-feedback-left"
                                placeholder="Manufacturer"  value = "<?php echo  $row[2];?>">

                        </div>
                        <div class="col-md-4 col-sm-4">
                            <input id="supplier" type="text" class="form-control has-feedback-left"
                                placeholder="Supplier"  value = "<?php echo  $row[3];?>">

                        </div><br><br><br>

                        <div class="col-md-12 col-sm-12">
                            <textarea class="form-control" placeholder="Medicine Description"></textarea >
                        </div><br><br><br><br>

                        <div class="col-md-4 col-sm-4">
                            <input id="ndc" type="number" class="form-control has-feedback-left"
                                placeholder="NDC (National Drug Code)"  value = "<?php echo  $row[4];?>">
                            <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                        </div>



                        <div class="col-md-4 col-sm-4">
                            <input id="quantity" type="text" class="form-control has-feedback-left"
                                placeholder="Quantity"  value = "<?php echo  $row[6];?>">
                            <span class="fa fa-hourglass-o form-control-feedback left" aria-hidden="true"></span>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <input id="unit_price" type="text" class="form-control has-feedback-left"
                                placeholder="Unit Price"  value = "<?php echo  $row[7];?>">
                            <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                        </div><br><br><br>


                        <div class="col-md-4 col-sm-4">
                            <input id="expiration_date" type="date" class="form-control has-feedback-left"
                                placeholder=""  value = "<?php echo  $row[5];?>">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                        </div><br><br><br>

                        <div class="col-md-12 col-sm-12 ">
                            <a href='medicine.php' style="color:white;" class="btn btn-primary" type="button">Cancel</a>
                            <button id="medicineUpdate" style="color:white;" type="submit"
                                class="btn btn-success">Update</button>
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