<?php
/*
 * @CODY-BY-ARMAN
 * V1.0
 */

// The Mail will go to Here #######################################
$mail_to= 'mitchellfalvo@gmail.com';

// The Email will go from #######################################
$mail_from = "mitch@bottlesforbales.org";

// After Submitting The Email Where Need to go back...?
$go_back = "https://www.bottlesforbales.org/";


if(isset($_POST['send_to_email'])){

    $number_of_bag = $_POST['number_of_bag'];
    $select_country = $_POST['select_country'];
    $name = $_POST['name'];
    $streetAddress = $_POST['streetAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $bagLocation = $_POST['bagLocation'];

    $subject = 'Form Submition';
    $message = '<h3>Submited Form Information------------></h3>
        <b>Number of Bags:</b> '. $number_of_bag . '<br>
        <b>County:</b> '. $select_country . '<br>
        <b>Name:</b> '. $name . '<br>
        <b>Street Address:</b> '. $streetAddress . '<br>
        <b>Phone Number:</b> '. $phoneNumber . '<br>
        <b>Bag Location:</b> '. $bagLocation . '<br>
    ';

    $headers = 'From: '. $mail_from . "\r\n" .
    'Reply-To: '. $mail_from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    if( mail($mail_to, $subject, $message, $headers) ){
        $submited = 'true';
    }else{
        $submited = 'false';
    }

    echo $message;
}
header( "Location: $go_back?mail-submited=$submited" );

?>