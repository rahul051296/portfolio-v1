   <?php
            if(isset($_POST['submit']))
{                   
            DEFINE ('DB_USER','u306510959_rahul');
            DEFINE ('DB_PSWD','12345678');
            DEFINE ('DB_HOST','mysql.hostinger.in');
            DEFINE ('DB_NAME','u306510959_rahul');

            $dbcon= mysqli_connect( DB_HOST, DB_USER, DB_PSWD, DB_NAME);

            if(!$dbcon)
                {
                    die('Error Connecting to database');
                }
    
                $name =mysqli_real_escape_string($dbcon, $_POST['name']);
                $email = mysqli_real_escape_string($dbcon, $_POST['email']);
                $phone = mysqli_real_escape_string($dbcon, $_POST['phone']);
                $message = mysqli_real_escape_string($dbcon, $_POST['message']);
                $headers .= 'From: Rahul Prabhakar<admin@rahulprabhakar.ml>' . "\n";
                $msg = 'Name: ' .$_POST['name'] ."\n"
                    .'Email: ' .$_POST['email'] ."\n"
                    .'Phone: ' .$_POST['phone'] ."\n"
                    .'DOB: ' .$_POST['dob'] ."\n"
                    .'Message: ' .$_POST['message'];
                $reply = 'Hi ' .$_POST['name'] ."\n\n" .
                    'Thank you for getting in touch with me. I will review your message and get back to you shortly' ."\n\n" .
                    'Best Regards,'."\n" .'Rahul Prabhakar';
    
            mail('rahulprabhakar0596@gmail.com','Request from Portfolio Website', $msg, $headers);
            mail($email,'Thank You',$reply,$headers);
            $sqlinsert="INSERT INTO people (Name,Email,Phone,Message) values('$name','$email','$phone','$message')";
                    
                    if(!mysqli_query($dbcon, $sqlinsert))
                    {
                        die('Error inserting new record');
                    }
                 header("refresh:4; url=index.html");
                    
}
        ?>
        
        
        <html>
<head>
        <meta name="theme-color" content="#374e44">  
     <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background:#f1f1f1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <div class="container">
    <h1 class="text-primary text-center">Thank You for Contacting me. I will get back to you shortly.</h1>
    <p class="text-muted text-center">Redirecting You to Homepage</p>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    </body>
</html>