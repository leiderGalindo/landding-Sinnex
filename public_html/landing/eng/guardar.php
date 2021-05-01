<?php
$servername = "localhost";
$username = "c2110576_form";
$password = "PE35geredo";
$dbname = "c2110576_form";
$conn= mysqli_connect($servername,$username,$password,$dbname);

$nombre=$_POST['nombres'];
$apellido=$_POST['apellidos'];
$email=$_POST['email'];
$phone=$_POST['telefono'];
$company=$_POST['company'];
$companyaddress=$_POST['companydireccion'];
$infovendors=$_POST['infovendors'];
$infoengienners=$_POST['infoengienners'];

$query = "insert into formulario (id,nombres,apellidos,email,telefono,company,companydireccion,infovendors,infoengineers) values ('','$nombre','$apellido','$email','$phone','$company','$companyaddress','$infovendors','$infoengienners');";
$result = mysqli_query($conn, $query);


$motivo = 'Registration confirmation';
$num = md5(time());

$body = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <title>Registration confirmation</title>
        </head>
        <body>
    
            <div style="width:100%!important;min-width:100%;color:#0a0836;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:14px;line-height:1.5;margin:0;padding:0" bgcolor="#f6fafb">
                <center style="width:100%;background-color:rgba(245, 245, 245, 0.747);">
    
                    
                    
                    
                    <div style="margin-left: 50px;margin-right: 50px;margin-top: -150px;">
                        
                        <div style="margin-top: 5%;">
                            <div class="col-12" style="color: rgb(65,64,108);padding: 70px;background-color: white;text-align: justify;width:70%;">
                                
                                <h1>name: '.$nombre.'</h1>
                                <h1>lastName: '.$apellido.'</h1>
                                <h1>email: '.$email.'</h1>
                                <h1>phone: '.$phone.'</h1>
                                <h1>companyName: '.$company.'</h1>
                                <h1>companyAddress: '.$companyaddress.'</h1>
                            </div>
                        </div>
                    </div>

                </center>
            </div>
    
        </body>
    </html>
';

$mensaje = wordwrap($body, 70, "\r\n");

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: NetApp-Synnex <c2110576.ferozo.com>\r\n";


//mail($email, $motivo, $headers);
$exito = mail('synnexwestcon@attachamericas.com', 'Registration confirmation', $mensaje, $headers);



header('Location: https://attachamericas.site/landing/eng/');
die()

?>