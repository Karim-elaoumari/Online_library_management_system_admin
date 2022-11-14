<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["reset"])){
    $email = $_POST["email"];

    $sql = "SELECT id, email FROM admins";
    $result = mysqli_query($conn, $sql);
    $iss=0;
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        if($email==$row['email']){
            $id = $row['id'];
            $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code=substr(str_shuffle($set), 0, 12);
            $sql = "UPDATE `admins` SET `password`='$code' WHERE  `id`='$id'";

            if (mysqli_query($conn, $sql)){
                $message = "
                            <h2>This is your reset Password</h2>
                            
                            <div style='line-height: 160%; text-align: center; word-wrap: break-word;'>
                                    <p style='font-size: 14px; line-height: 160%;'><span style='font-size: 22px; line-height: 35.2px;'>Hi, </span></p>
                                    
                                    <p>Your Account for YouCode Library:</p>
                        <p>Email: ".$email."</p>
                        <p>Password: ".$code."</p>
                                    
                        <a href='http://localhost/http://localhost/Online_library_management_system_admin/index.php' target='_blank' style='box-sizing: border-box;display: inline-block;font-family:'Cabin',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #ff6600; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;'>
                                    <span style='display:block;padding:14px 44px 13px;line-height:120%;'><span style='font-size: 16px; line-height: 19.2px;'><strong><span style='line-height: 19.2px; font-size: 16px;'>Reset</span></strong>
                                    </span>
                                    </span>
                                    </a>
                        
                        </div>
                        ";
                require 'vendor/autoload.php';

                $mail = new PHPMailer(true);                             
                try {
                    //Server settings
                    $mail->isSMTP();                                     
                    $mail->Host = 'smtp.gmail.com';                      
                    $mail->SMTPAuth = true;                               
                    $mail->Username = 'elaoumarikarim@gmail.com';      
                    $mail->Password = 'pjrcbjummsrzccsx';  
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                        )
                    );                         
                    $mail->SMTPSecure = 'ssl';                           
                    $mail->Port = 465;                                   

                    $mail->setFrom('elaoumarikarim@gmail.com');
                    
                    //Recipients
                    $mail->addAddress($email);              
                    $mail->addReplyTo('eloaumarikarim@gmail.com');
                    
                    //Content
                    $mail->isHTML(true);                                  
                    $mail->Subject = "Library Account Reset";
                    $mail->Body    = $message;

                    $mail->send();

                    

                    $_SESSION['message'] = "Password has been reset Plaise check your email to get your Password Login";
                    

                } 
                catch (Exception $e) {
                    $_SESSION['danger'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
                }
            
                
            
            }
        
        }
    else{
        $_SESSION['danger'] = "This E-mail not exist !";
       }
    }
    
}
}


?>