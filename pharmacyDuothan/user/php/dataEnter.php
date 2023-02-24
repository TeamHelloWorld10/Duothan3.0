<?php 

require('conn.php');

session_start();

function filteration($data){
    foreach($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);

    }
    return $data;
}

function setSession($conn,$users,$email,$password){
    $query = "SELECT ".$users['userId']." FROM ".$users['table']." WHERE ".$users['email']."='$email' AND ".$users['password']."='$password'";
    
    $result=mysqli_query($conn,$query);
    
    if (mysqli_num_rows($result)==1){  
        $row=mysqli_fetch_assoc($result);
        $_SESSION['userLogin'] = true;
        $_SESSION['userId'] = $row[$users['userId']];
        return TRUE;
    }
    else{
        return FALSE;
    }
}

if ($_POST['enterData']=='logIn') {
    $user = filteration($_POST['user']);
    $email=$user['uEmail'];
    $password=$user['uPassword'];
   

    if(setSession($conn,$users,$email,$password)){
        echo"succeed";
    }
    else {
        echo"&nbsp&nbsp*(Incorrect Email Or password)";
    }
  
}

if($_POST['enterData']=='emailCheck'){
    $userEmail = filteration($_POST);
    $email=$userEmail['userEmail'];
    $query = "SELECT ".$users['userId']." FROM ".$users['table']." WHERE ".$users['email']."='$email'";

    $result=mysqli_query($conn,$query);
   
    if (mysqli_num_rows($result)==0){  
        echo "succeed";     
    } 
}

if ($_POST['enterData']=='register'){
    $user=filteration($_POST['user']);
    $sql="INSERT INTO ".$users['table']."(".$users['userName'].", ".$users['telephone'].",".$users['email'].",
        ".$users['password'].",".$users['dateOfBirth'].",".$users['address'].", 
        ".$users['passportNum'].") 
        VALUES (
        '".$user['uName']."',
        '".$user['uPhone']."',
        '".$user['uEmail']."',
        '".$user['uPassword']."',
        '".$user['uDateOfBirth']."',
        '".$user['uAddress']."',
        '".$user['uPinCode']."')";

   
    if(mysqli_query($conn, $sql)){
        if(setSession($conn,$users,$user['uEmail'],$user['uPassword'])){
            echo "succeed";
        }else{
            echo "Something went wrong!!"; 
        }
    }else{
        echo "Error: Can't Register" ;
    }
   
}


if ($_POST['enterData']=='logOut') {
    session_destroy();
}

mysqli_close($conn);