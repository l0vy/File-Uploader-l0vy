<?php

   

if($_SERVER['REQUEST_METHOD']=='POST')
    { $name= $_FILES['file'] ['name'];
      $tmpname=$_FILES['file'] ['tmp_name'];
      $error= $_FILES['file'] ['error'];
      $size= $_FILES['file'] ['size'];
      $ext= strtolower(pathinfo($name, PATHINFO_EXTENSION));
     $response='';
     
     $todays_date = date("mdYHis");
     $new_file_name=$todays_date.rand(10,100).$name;

switch($error) {
    case UPLOAD_ERR_OK:
                    $valid = true;
                    //validate file extensions
                    if ( !in_array($ext, array('pdf','doc','docx','txt')) ) {
                        $valid = false;
                        $response = 'Invalid file extension.';
                    }
                    //validate file size
                    if ( $size/1024/1024 > 2 ) {
                        $valid = false;
                        $response = 'File size is exceeding maximum allowed size.';
                    }
                    //upload file
                    if ($valid) {
                        $destination = 'C:\xampp\htdocs\File Upload\uploads\\';
            
                        move_uploaded_file($_FILES['file']['tmp_name'], $destination. $new_file_name);
                        
                    }
                    break;
                
        }
    }
echo $response;
//Database
        $nam=$_POST['name'];
            $email=$_POST['email'];
                $contact=$_POST['contact'];

include('conn.php');


$sql= mysqli_query($conn,"INSERT INTO `tab` (`CName`,`Email`,`contact`,`FName`,`Size`) VALUES('$nam','$email','$contact','$new_file_name', '$size') ");

/* FOr redirection to a particular web page
header("Location: http:///");
*/

?>