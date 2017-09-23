<?php
/**
 * Created by PhpStorm.
 * User: ITMart
 * Date: 9/21/17
 * Time: 8:47 AM
 */

echo $name=$_POST['name'];
echo "<br>";
echo $email=$_POST['email'];
echo "<br>";
echo $mobile=$_POST['mobile'];
echo "<br>";
echo $subject=$_POST['subject'];
echo "<br>";
echo $Message=$_POST['Message'];
echo "<br>";


/**
 * Created by PhpStorm.
 * User: Rizkan
 * Date: 9/23/2017
 * Time: 12:01 AM
 */

if (isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "rizkancool@gmail.com";
    $from = $email;
    $s = 'contact form ajax';
    $m = '<b>Name:</b>'.$name;
    $h = "from: $from\n";
    $h = "MIME-Version: 1.0\n";

    if ( mail($to, $s, $m, $h)){
        echo "success";
    }else{
        echo"there is a problem";
    }

}
?>