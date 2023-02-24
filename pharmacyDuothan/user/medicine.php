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
                <h3><i class="fa fa-medkit"></i> Medicine</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Medicines</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <a href="add-medicine.php" class="btn btn-sm btn-info text-white"><i class="fa fa-plus"></i> Add Medicine</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Drug Name</th>
                          <th>Manufacturer</th>
                          <th>Supplier</th>
                          <th>NDC</th>
                          <th>Expiration date</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody id="loadMedcine">

                     <!-- load medicine -->
              
                      </tbody>
                    </table>
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
