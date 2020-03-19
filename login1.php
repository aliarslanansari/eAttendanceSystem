<?php
require_once 'db_config.php';
$row=mysqli_fetch_array(mysqli_query($conn,"SELECT user_email, user_password, type from user WHERE user_email='".$_POST['user_email1']."' && user_password='".$_POST['user_password1']."' && type='".$_POST['type']."';"));
if (sizeof($row) > 0 ){
    echo "correct";
} else{
    echo 'wrong';
}

?>
