<html>
<head>
</head>
<body>
    
   <form action="" method="post">
   
Enter Text:<br>
   <input type="text" name="id" value="" />
<br><br>
<input type="submit" name="submit" value="Submit" />
        </form>

    <?php
     if (isset($_POST['submit'])) {
         $id = $_POST['id'];
         
     

        
        
        function encrypt_decrypt($action, $string) {
            $output = false;

            $encrypt_method = "AES-256-CBC";
            $secret_key = 'sadgjakgdkjafkj';
            $secret_iv = 'This is my secret iv';

            $key = hash('sha256', $secret_key);
            
            $iv = substr(hash('sha256', $secret_iv), 0, 16);

            if ( $action == 'encrypt' ) {
                $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
                $output = base64_encode($output);
            } else if( $action == 'decrypt' ) {
                $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
            }

            return $output;
        }

        //$plain_txt = "Hello World!";
        echo "Original Text =" .$id. "\n";
        ?><br><br><?php
            $encrypted_txt = encrypt_decrypt('encrypt', $id);
            
        echo "Encrypted Text = " .$encrypted_txt. "\n";
            ?><br><br><?php
                }
    ?>
    <a href= "home.php?id=<?php echo $encrypted_txt;?>"> Click Here </a>


</body>
</html>



