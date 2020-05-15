<html>
<head>

</head>
<body>
    
   <form action="" method="post">
   
ID:<br>
   <input type="text" name="id" value="" />
<br><br>
<input type="submit" name="submit" value="Submit" />
        </form>

    <?php
     if (isset($_POST['submit'])) {
         $id = $_POST['id'];
         $a = "qrcode.php?s=qrl&d=";
    }

    ?>
    

<img src="<?php echo $a.$id;?>">


</body>
</html>
