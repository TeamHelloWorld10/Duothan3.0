<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php';

include 'php/conn.php';
 $pid=23454678;

     
function getData($conn, $sql){
  $result = mysqli_query($conn, $sql);
 
  if(! $result ) {
      die('Could not get data: ' .  mysqli_connect_error()());
  }
  return $result;
}


$sql="SELECT * FROM `user_data` WHERE nic=$pid";
$result=getData($conn, $sql);

$row = mysqli_fetch_array($result);

  


?>
   
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
                <h3><i class="fa fa-user"></i> Profile</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profile Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" style="border-radius:10px">
                        </div>
                      </div>
                      <h3><?php echo $row['pharmacy_name']?></h3>

                      <ul class="list-unstyled user_data">
                     

                        <li>
                          <i class="fa fa-user user-profile-icon"></i> Cashier
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="#" target="_blank">www.facebook.com</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-9 col-sm-9  profile_left">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><strong><i class="fa fa-user"></i> Profile Information</strong></label>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" >Full Name <span class="required">*</span>
                    </label>
                    <div class="col-md-4 col-sm-4 ">
                      <input type="text" required="required" class="form-control" placeholder="First Name" value="<?php echo $row['u_name']?>">
                    </div>
                    
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="support@gmail.com" value="<?php echo $row['email']?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Contact</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="09486087489" value="<?php echo $row['phone_number']?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="" value="<?php echo $row['address']?>">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Pharmacy Licence</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="" value="<?php echo $row['pharmacy_license']?>">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">NIC</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="" value="<?php echo $row['nic']?>">
                    </div>
                  </div>




                  

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><strong><i class="fa fa-key"></i> Account Information</strong></label>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="Username" value="<?php echo $row['u_name']?>">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="************">
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                      <button class="btn btn-primary" type="button">Cancel</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>

                  </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'include/footer.php';?>
  </body>
</html>
