<?php

require "./conn.php";

$fname = test_input($_POST['fname']);
$lname = test_input($_POST['lname']);
$email = test_input($_POST['email']);
$profile = test_input($_POST['profile']);
$dob = test_input($_POST['dob']);
$rno= test_input($_POST['rno']);

if(isset($fname) && isset($lname) && isset($email) && isset($profile) && isset($dob) && isset($rno))
{
   $sql = "SELECT * FROM user WHERE rollnumber = '".$rno."'";
   $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($row['dob'] == $dob){
        $sql = "UPDATE `user` SET `fname` = '$fname',`lname` = '$lname',`email` = '$email',`profile` = '$profile'  WHERE `user`.`rollnumber` = '$rno';";
    if($conn->query($sql) === TRUE)
    {
        header('Location: /pmanager/index.php');
    }
    else{
        header('Location: /pmanager/error.php');
    }
    $conn->close();
}
}

?>