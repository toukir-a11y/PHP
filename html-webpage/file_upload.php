
<?php

    $type_check = array( 'image/jpg', 'image/jpeg', 'image/png');

    if(!empty($_FILES['file']) )
    
    {


        if( in_array( $_FILES['file']['type'], $type_check )!== false && $_FILES['file']['size']<5*1024*1024 )
        {
            move_uploaded_file( $_FILES['file']['tmp_name'], "file/".$_FILES['file']['name'] );
        }   

    }        

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>File Upload</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

<style>
   body{
       margin-top:50px;
   }
</style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="colum colum-60 colum-offset-20">
            <h2>Hello WPPOOLIAN</h2>
            <p>Just for test purpose</p>

            <pre>
                 <p>
                     <?php print_r($_POST);?>

                     <?php print_r($_FILES);?>
                </p> 

            </pre>
                          
        </div>
    </div>
<div class="row">
    <div class="colum colum-60 colum-offset-20">
        
        <form method ="POST" enctype="multipart/form-data">

                <label for="fname">First name</label><br>
                <input type="text" id="fname" name="fname">
                
                <label for="lname">Last name</label><br>
                <input type="text" id="lname" name="lname">

                <label for="file">File</label><br>
                <input type="file" id="file" name="file">

                <button type='submit'>submit</button>

        </form>
    </div>
</div>
</div>
</body>
</html>


