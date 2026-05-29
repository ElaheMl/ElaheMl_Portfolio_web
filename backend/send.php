<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = htmlspecialchars($_POST['name']);

    $email = htmlspecialchars($_POST['email']);

    $message = htmlspecialchars($_POST['message']);


    $mail = new PHPMailer(true);

    try{

        /* SMTP */

        $mail->isSMTP();

        $mail->Host = 'smtp.gmail.com';

        $mail->SMTPAuth = true;

        $mail->Username = 'elmaashiasl@gmail.com';

        $mail->Password = 'mhnealfjagqbdnni';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

        $mail->Port = 465;


        /* SSL FIX */

        $mail->SMTPOptions = array(

            'ssl' => array(

                'verify_peer' => false,

                'verify_peer_name' => false,

                'allow_self_signed' => true

            )

        );


        /* UTF-8 */

        $mail->CharSet = 'UTF-8';


        /* SENDER */

        $mail->setFrom(
            'elmaashiasl@gmail.com',
            'ElaheDev Portfolio'
        );


        /* REPLY TO */

        $mail->addReplyTo($email, $name);


        /* RECEIVER */

        $mail->addAddress('elmaashiasl@gmail.com');


        /* CONTENT */

        $mail->isHTML(true);

        $mail->Subject = 'New Portfolio Message';


        $mail->Body = "

        <div style='
            font-family: Arial;
            padding: 20px;
            background: #0B1120;
            color: #fff;
            border-radius: 16px;
        '>

            <h2 style='color:#60A5FA;'>

                New Portfolio Message

            </h2>

            <p>

                <strong>Name:</strong>
                {$name}

            </p>

            <p>

                <strong>Email:</strong>
                {$email}

            </p>

            <p>

                <strong>Message:</strong>

            </p>

            <p>

                {$message}

            </p>

        </div>

        ";


        /* SEND */

        $mail->send();


        header('Location: ../frontend/index.php?success=1');

        exit();


    }catch(Exception $e){

        echo $mail->ErrorInfo;

    }

}

?>