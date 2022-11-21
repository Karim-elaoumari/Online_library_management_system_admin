<?php 
    require "database.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

if(isset($_POST['sign-up'])){
    $first_name        = filter_var($_POST['first-name'],FILTER_SANITIZE_STRING);
    $last_name         = filter_var($_POST['last-name'],FILTER_SANITIZE_STRING);
    $email             = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
    $sql               = "SELECT email FROM admins";
    $result            = mysqli_query($conn, $sql);
    $is=0;
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        if($email==$row['email']){
           $is=1;
        }
    }
    }
    if($is==0){
        $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code=substr(str_shuffle($set), 0, 12);
        $sql = "INSERT INTO admins (first_name, last_name, email,password,photo)
        VALUES ('$first_name', '$last_name', '$email','$code','user-12')";

        if (mysqli_query($conn, $sql)){
            $message = "
						<h2>Thank you for Registering.</h2>
						
                        <div style='line-height: 160%; text-align: center; word-wrap: break-word;'>
                                <p style='font-size: 14px; line-height: 160%;'><span style='font-size: 22px; line-height: 35.2px;'>Hi, </span></p>
                                <p style='font-size: 14px; line-height: 160%;'><span style='font-size: 18px; line-height: 28.8px;'>You're almost ready to get started. Please click on the button below to activate your account and enjoy as an admin! </span></p>
                                <p>Your Account:</p>
					<p>Email: ".$email."</p>
                    <p>Password: ".$code."</p>
                                
                    <a href='http://localhost/http://localhost/Online_library_management_system_admin/index.php' target='_blank' style='box-sizing: border-box;display: inline-block;font-family:'Cabin',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #ff6600; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;'>
                                  <span style='display:block;padding:14px 44px 13px;line-height:120%;'><span style='font-size: 16px; line-height: 19.2px;'><strong><span style='line-height: 19.2px; font-size: 16px;'>Login</span></strong>
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
                    'allow_self_signed' => true,
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
                $mail->Subject = "Library Account Activation";
                $mail->Body    = $message;

                $mail->send();

                

                $_SESSION['message'] = "Account has been Created Plaise check your email to get your Password Login";
                

            } 
            catch (Exception $e) {
                $_SESSION['danger'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
            }
        
            
        }else{
            $_SESSION['danger'] = "There are a probleme plaise try again!";
        }
        mysqli_close($conn);
        

    }
    else{
        $_SESSION['danger'] = "Email All ready exist!";
    }
}










?>