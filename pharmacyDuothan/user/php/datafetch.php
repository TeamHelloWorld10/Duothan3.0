<?php

require('conn.php');

    
function getData($conn, $sql){
    $result = mysqli_query($conn, $sql);
   
    if(! $result ) {
        die('Could not get data: ' .  mysqli_connect_error()());
    }
    return $result;
}


if(isset($_POST['selector']) && $_POST['selector']=='loadMedcine'){

     $sql="SELECT * FROM `drugs`";
     $result=getData($conn, $sql);
     $count=1;

     while ($row = mysqli_fetch_array($result)) {

      

        echo '<tr style="LINE-HEIGHT:45px">';
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['drug_name']."</td>";
        echo "<td>".$row['manufacturer']."</td>";
        echo "<td>".$row['supplier']."</td>";
        echo "<td>".$row['ndc']."</td>";
        echo "<td>".$row['expiration_date']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "<td>".$row['unit_price']."</td>";
        echo '<td>
             <span>
             <a class="btn btn-sm btn-info text-white"><i class="fa fa-eye"></i> details</a>
             <a href="updateMedicine.php?id='.$row['id'].'" class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
            <a class="btn btn-sm btn-danger text-white"><i class="fa fa-trash"></i> delete</a>
             </span>
        </td></tr>';

        $count+=1;

    }
}




if(isset($_POST['selector']) && $_POST['selector']=='addMedcine'){
    $data=$_POST['data'];
   

    $sql="INSERT INTO `drugs`(`drug_name`, `manufacturer`, `supplier`, `ndc`, `expiration_date`, `quantity`, `unit_price`) 
    VALUES ('$data[0]','$data[1]','$data[2]',$data[3],'$data[4]',$data[5],$data[6])";
    // echo $sql;

    mysqli_query($conn, $sql);
     
}



if(isset($_POST['selector']) && $_POST['selector']=='medicineUpdate'){
    $data=$_POST['data'];
   
    $sql="UPDATE `drugs` SET `drug_name`='$data[0]',`manufacturer`='$data[1]',`supplier`='$data[2]',
    `ndc`='$data[3]',`expiration_date`='$data[4]',`quantity`='$data[5]',`unit_price`='$data[6]' WHERE id=$data[7]";
   

    mysqli_query($conn, $sql);

    echo "ok";
     
}







mysqli_close($conn);






?>