
<?php

//require_once 'PHPMailer.php';
//require_once 'Exception.php';
//require_once 'SMTP.php';

require_once 'config.php';

if(isset($_POST['razorpay_payment_id']) == 'razorpay_payment_id'){

    $data = array();  
    $id = $_POST['id'];
    // $productName =$_POST['productName'];
    $amount =  $_POST['amount'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    // $quantity = 1;
    // $product_description = "";
    // $body = "";
    // $custom_string = "";
    // $email="promotions@thetopcontroller.com";
    // if(!isset($_POST['email'])){
    //     $email="promotions@thetopcontroller.com";
    // } else{
    //     $email = $_POST['email'];
    // }
    
    $query = "UPDATE `orders` SET `status` = 'paid', `razorpay_payment_id` = '$razorpay_payment_id' WHERE `id` = $id ";
    
    if($result = mysqli_query($conn, $query))  
    {  

        // $query = "UPDATE `inventory` SET `left_inventory` = `left_inventory` - 1 WHERE `productName` = $productName ";
        // $result = mysqli_query($conn, $query);
        $data['status'] = 'ok';
        $data['id'] = $id;
        // session_start();
        // $_SESSION['useremail'] = $_POST['email'];
        echo json_encode($data);


        // $err = array();

        // $mail = new PHPMailer\PHPMailer\PHPMailer();
        
        // $mail->isSMTP();  // the mailer is set to use SMTP
        // // $mail->Host = "smtp.zoho.in";  // specify main and backup server
        // // $mail->SMTPAuth = true; // SMTP authentication is turned on
        // // $mail->Username = "support@thetopcontroller.com";  // SMTP username
        // // $mail->Password = "#Rajabeta420"; // SMTP password
        // // $mail->SMTPSecure = 'ssl';
        // // $mail->Port = 465;

        // $mail->isSMTP();
        // $mail->Host = 'localhost';
        // $mail->SMTPAuth = false;
        // $mail->SMTPAutoTLS = false; 
        // $mail->Port = 25; 
        
        // $mail->From = "support@thetopcontroller.com";
        // $mail->FromName = "The Top Controller";	 // name is optional
        // $mail->AddAddress($email);
        // $mail->AddReplyTo("support@thetopcontroller.com", "Support | The Top Controller");
        
        // $mail->WordWrap = 50;  // set word wrap to 50 characters
        // $mail->IsHTML(true); // set email format to HTML
        
        // $body = file_get_contents('../email-template/email-template-1.html');
        // $custom_string = '<div style="background-color: #F5E3AE; display: flex;justify-content: center;align-items: center;padding-bottom: 30px;">
        //     <table style="width:500px;text-align: center;" id="table-here">
        //         <tr>
        //             <th style="border: 1px solid black;">ORDER ID</th>
        //             <th style="border: 1px solid black;">PRODUCT NAME</th>
        //             <th style="border: 1px solid black;">QUANTITY</th>
        //             <th style="border: 1px solid black;">AMOUNT PAID</th>
        //         </tr>
        //         <tr>
        //             <td style="border: 1px solid black;">#'.$id.'</td>
        //             <td style="border: 1px solid black;">'.$product_description.'</td>
        //             <td style="border: 1px solid black;">'.$quantity.'</td>
        //             <td style="border: 1px solid black;">$'.$amount.'</td>
        //         </tr>
                
        //     </table>
        // </div>';
        // $body = $body.$custom_string.file_get_contents('../email-template/email-template-2.html');
        // $mail->Subject = "Thankyou for your Purchase | TheTopController";
        // $mail->Body    = $body;
        // $mail->AltBody = "This email contains the order invoice of Order Id : #".$id;
        
        // if(!$mail->Send()) {
            // $data['mail'] = $mail->ErrorInfo;
            //    echo '<div class="status-icon invalid"><i class="fa fa-close"></i></div>';
        // }
        // else{
            // echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
    //     }
    //     echo json_encode($data);

    }else {  
       echo "<script>console.log('error','problem with query after signup1')</script>"; 
    } 
}

?>