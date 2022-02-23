

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sanatize</title>
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

                <p style = "color: red;">
                                                            
                    <?php

                        $fname ="";
                        $lname ="";


                        if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname']))
                        {
                           //$fname =  htmlspecialchars($_REQUEST['fname']);

                           //$fname = filter_input(INPUT_GET, 'fname', FILTER_SANITIZE_STRING);

                           $fname = filter_input(INPUT_GET, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
                        }

                        echo "</br>  </br>";

                        if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname']))
                        {
                            //$lname = htmlspecialchars($_REQUEST['lname']);

                            //$lname = filter_input(INPUT_GET,'lname', FILTER_SANITIZE_STRING);
                            
                            $lname = filter_input(INPUT_GET, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
                        }

                        
                    ?>
                </p>     
                
                <P>
                        Fname : <?php echo $fname; ?> </br>
                        Lname : <?php echo $lname; ?>
                </P> 

            </div>
        </div>
    <div class="row">
        <div class="colum colum-60 colum-offset-20">
            <form method ="REQUEST">
                <label for="fname">First name</label><br>
                <input type="text" id="fname" name="fname" value = "<?php echo $fname;?>">
                
                <label for="lname">Last name</label><br>
                <input type="text" id="lname" name="lname" value = "<?php echo $lname;?>">

                <button type='submit'>submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>


