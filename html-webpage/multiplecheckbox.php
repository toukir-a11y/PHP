
<?php include_once "functions.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mulliple checkbox</title>
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
                        $checked ="";


                        if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname']))
                        {
                           $fname =  htmlspecialchars($_REQUEST['fname']);                          
                        }

                        echo "</br>  </br>";

                        if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname']))
                        {
                            $lname = htmlspecialchars($_REQUEST['lname']);                           
                        }

                        if(isset($_REQUEST['check']) && ($_REQUEST['check']==1))
                        {
                           $checked = "checked" ;                      
                        }


                        print_r($_REQUEST);
                        
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

                <div>
                    <lebel for="check" class="label" >Checkbox</lebel>
                    <input type="checkbox" name ="check" id= "check" value = "1" <?php echo $checked ?>></br>
                </div>
                
                
                <lebel  class="label" >select color</lebel></br>

                <lebel class="label-inline" >Red</lebel>
                <input type="checkbox" name ="color[]" value="red" <?php checkbox('color', 'red')?>></br>

                <lebel  class="label-inline" >Green</lebel>
                <input type="checkbox" name ="color[]" value="green" <?php checkbox('color', 'green')?>></br>

                <lebel  class="label-inline" >Blue</lebel>
                <input type="checkbox" name ="color[]" value="blue" <?php checkbox('color', 'blue')?>></br>

                <lebel class="label-inline" >Black</lebel>
                <input type="checkbox" name ="color[]" value="black" <?php checkbox('color', 'black')?>></br>

                <button type='submit'>submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>


