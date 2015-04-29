<!DOCTYPE HTML>
<html lang="en">
 <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>PHP File Uploader</title>
     <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
     
    </head>
    
<body>
    
    <!--Static Navbar-->
    <div class="navbar navbar-default navbar-static-top">
       <div class="container">
         <div class="navbar-header">
             <a class="navbar-brand" href="index.php">PHP File uploader lovy&copy;</a>
           
            </div>                    
        </div>        
    </div>
    
    
<!--Form Contents-->    
    <div class="container">
        
           <div class="row">
               <div class="col-sm-12">
        <form class="well" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
    <label>Name</label>
    <input id="Name" class="form-control" type="text" name="name" placeholder="Enter name" required/></input>

            </div>
                   
                       <div class="form-group">
            <label>Email</label>
            <input id="Email" class="form-control" type="email" name="email" placeholder="Email" required/></input>
            </div>
               
               
               <div class="form-group">
               <label>Contact No.</label>
               <input id="Contact No." class="form-control" type="text" name="contact" placeholder="Mobile" required/></input>
                </div>
        
        
            <div class="form-group">
                <label for="file">Upload here</label>
                <input type="file" name="file">
                <p class="help-block">Only doc,docx,pdf files with maximum size of 2 MB is allowed.</p> 
            </div>
        
        
            <input type="submit" class="btn btn-sm btn-success" value="Upload">
           
           </form>
               </div>
            </div>
        </div>
            
    </body>

</html>