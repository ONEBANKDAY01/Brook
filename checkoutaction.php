<?php
include 'connect.php';

print_r($_POST);


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$country = $_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip_code = $_POST['zip_code'];
$action = $_POST['action'];

if($action=='buy'){

    $sql = "INSERT INTO test_order (`first_name`, `last_name`, `email`, `tel`, `address1`, `address2`, `country`, `city`, `state`, zip_code)
            VALUES ('$first_name', '$last_name', '$email', '$tel', '$address1', '$address2', '$country', '$city', '$state', '$zip_code')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


}


// $url        = 'https://notify-api.line.me/api/notify';
// $token      = 'ใส่ token ที่นี่';
// $headers    = [
//                 'Content-Type: application/x-www-form-urlencoded',
//                 'Authorization: Bearer '.$token
//             ];
// $fields     = 'message=ใส่ข้อความที่นี่';

// $ch = curl_init();
// curl_setopt( $ch, CURLOPT_URL, $url);
// curl_setopt( $ch, CURLOPT_POST, 1);
// curl_setopt( $ch, CURLOPT_POSTFIELDS, $fields);
// curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
// $result = curl_exec( $ch );
// curl_close( $ch );

// var_dump($result);
// $result = json_decode($result,TRUE);








header("Location: checkout.php");






?>