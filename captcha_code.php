<?php 

    // $host = "192.227.85.170"; 
    // $user = "midsupport_mid"; 
    // $pass = "MidDbano1"; 
    // $database = "midsupport_mid"; 
    // // Connecting to the Database 
    // $connect = @mysql_connect($host, $user, $pass) or die("could not connect to server"); 

    // // Selecting the Database for use 
    // $db_select = @mysql_select_db($database) or die("could not select the database");

    include("dbopenconn.php");

    date_default_timezone_set("Asia/Kolkata");

    $currentTime = date( 'Y-m-d h:i:s', time () );  

    $WebsiteUrl = $_SERVER['HTTP_HOST'];

    /* Generate 32bit random number*/
    function guidv4($data)
    {
        assert(strlen($data) == 16);

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    $random_key = guidv4(openssl_random_pseudo_bytes(16));
    // echo $random_key

    /*Number convert into the image*/
    $text = rand(100000, 999999);
    // echo $text;                           
    
    // Create the size of image or blank image 
    $image = imagecreate(72, 25); 
      
    // Set the background color of image 
    $background_color = imagecolorallocate($image, 0, 0, 0); 
      
    // Set the text color of image 
    $text_color = imagecolorallocate($image, 255, 255, 255);  
      
    // Function to create image which contains string. 
    imagestring($image, 5, 10, 5, $text, $text_color);

    $query = mysql_query('INSERT INTO `code_verify` (`random_no`,`random_key`,`domain_name`,`status`,`created_on`) VALUES("'.$text.'","'.$random_key.'","'.$WebsiteUrl.'","'. 0 .'","'.$currentTime.'")');
    ob_start();
    imagepng($image);
    printf('<img id="output" src="data:image/png;base64,%s" />', base64_encode(ob_get_clean()));

?> 
<input type="hidden" name="random_key" value="<?php echo $random_key;?>" id="random_key">
<input type="hidden" name="domain_name" value="<?php echo $WebsiteUrl;?>" id="domain_name">
