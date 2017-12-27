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
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $subject = $_POST['course'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    $to = "info@balacademy.lk";
    $from = $name;
    $s = 'Contact form Website';
    $m = '<strong>Name: </strong>'.$name.'<br /> <strong>Address: </strong>'.$address.'<br /><strong>Phone:</strong>'.$phone.'<br/> <strong>E-mail:</strong>'.$email.'<br/> <strong>Course Name:</strong>'.$subject.'<br/> <strong>message:</strong>'.$message.'<br/>';
    $h .= 'Content-type: text/html; charset=UTF-8' . PHP_EOL;
    $h .= "from: $from\n";
    $h .= "MIME-Version: 1.1\n";
    $h .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

    if ( mail($to, $s, $m, $h)){
        echo "success";
    }else{
        echo"there is a problem";
    }

}
?>