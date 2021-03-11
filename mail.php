<?php
if ($_POST) {
    $to = "info@calpehomegroup.com "; // 
    if (isset($_POST['lang'])) {
        $lang = $_POST['lang'];
        $subject = "Landing Despegue $lang - Nueva solicitud";
    } else {
        $subject = "Landing Despegue - Nueva solicitud";
    }
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $phone = $_POST['telf'];
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $message = "
                <p>El siguiente contacto ha solicitado más información a través de la landing de Despegue:<p>
                <br>
                
                <b>Name</b>:  $name <br>
                <b>Email</b>:  $email <br>
                <b>Phone</b>:  $phone";

    $success = mail($to, $subject, $message, $headers);
    if ($success) {
        echo "success";
    }
    else {
        echo "fail";
    }
}
?>