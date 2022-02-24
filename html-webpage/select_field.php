
<?php include_once "select-functions.php" ;

    $color = ["red", "green", "blue", "orange", "black"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Select Field</title>
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
                <p>

                    <?php

                    /*

                        if( isset($_POST['color']) && $_POST['color'] != '' )
                        {
                            printf("your slected color : %s", filter_input ( INPUT_POST, 'color', FILTER_SANITIZE_STRING));
                        }

                        for single value print


                        for multiple value select 


                        $colors = $_POST['color'];
                        if(count($colors)>0)
                        {
                           echo "you've selected : ",join(", ", $colors);
                        }

                    */ 
                    
                    
                        $colors = $_POST['color'] ?? array();

                        
                        $colors = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

                        if(count($colors)>0)
                        {
                           echo "you've selected : ",join(", ", $colors);
                        }
                    ?>
               </p>                
            </div>
        </div>
    <div class="row">
        <div class="colum colum-60 colum-offset-20">
            <form method ="POST">
                <lebel for = "color">Select Color</lebel>
                <select name="color[]" id="color" multiple>
                    <option value="" disabled selected>selcet color</option>
                    <?php select($color);?> 
                </select>

                <button type='submit'>submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>


