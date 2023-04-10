<?php
session_start();
include '../database/connection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

// Load Composer's autoloader
require '../PHPMailer/vendor/autoload.php';

if (isset($_POST['generate_otp'])) {
    $email = mysqli_real_escape_string($dbconnetion, $_POST['email']); 
    $otp = rand(100000, 999999);

    $check_email = mysqli_query($dbconnetion, "SELECT * FROM bursary_users WHERE email = '$email' ");
    if (mysqli_num_rows($check_email) > 0) {

        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'tescodepro@gmail.com';                     // SMTP username
            $mail->Password   = 'rgderftxomocrsnd';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('info@summituniversity.edu.ng', 'Summit University');
            $mail->addAddress($email);     // Add a recipient
            $mail->addReplyTo('info@summituniversity.edu.ng', 'ICT OFFICER');

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Summit University Email Verification Token';
            $mail->Body    = 'Use this token to verify your Email: <b>' . $otp . '</b>';

            if ($mail->send()) {
                $time = time();
                $result = mysqli_query($dbconnetion, "UPDATE bursary_users SET otp = '$otp', expire_time = '$time' WHERE email = '$email'");
                // $result = mysqli_query($dbconnetion, $update_otp);
                if ($result) {
                    $_SESSION['email'] = $email;
                    header('Location: ../confirm_otp.php?msg=Please use the OTP sent to your email to have access to the dashboard.&type=success');
                } else {
                    header('Location: ../index.php?msg=An error occured while sending the OTP. Please try again.&type=error');
                }
            } else {
                header('Location: ../index.php?msg=An error occured while sending the OTP. Please try again.&type=error');
            }
        } catch (Exception $e) {
            header('Location: ../index.php?msg=An error occured while sending the OTP. Please try again.&type=error');
        }
    }else{
        header('Location: ../index.php?msg=Invalid email address&type=error');
    }
}


// verify otp
if (isset($_POST['verify_otp'])) {
    $otp = mysqli_real_escape_string($dbconnetion, $_POST['otp']);
    $email = $_SESSION['email'];

    $check_otp = mysqli_query($dbconnetion, "SELECT * FROM bursary_users WHERE otp = '$otp' AND email = '$email' ");
    if (mysqli_num_rows($check_otp) > 0) {
        $row = mysqli_fetch_assoc($check_otp);
        $expire_time = $row['expire_time'];
        $user_id = $row['email']; // user_id
        $current_time = time();
        $max_time_interval = 200; // 3 minutes 
        $get_time_interval = $current_time - $expire_time; // 300
        if ($get_time_interval > $max_time_interval) {
            header('Location: ../index.php?msg=Your OTP has expired. Please generate a new one.&type=error');
        } else {
            $update_status = mysqli_query($dbconnetion, "UPDATE bursary_users SET otp = null WHERE email = '$email' ");
            if ($update_status) {
                $auth_id = uniqid(mt_rand());
                $_SESSION['auth_token'] = $auth_id;
                $_SESSION['user_id'] = $user_id;
                header('Location: ../dashboard.php?msg=Congratulation OTP is correct.');
            } else {
                header('Location: ../confirm_otp.php?msg=An error occured while verifying you access. Please try again.&type=error');
            }
        }
    } else {
        header('Location: ../confirm_otp.php?msg=Invalid OTP. Please try again.&type=error');
    }
}