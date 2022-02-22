<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p style = "color: red;">

                                         
        <?php
            if(isset($_GET['fname']) && !empty($_GET['fname']))
            {
                printf("%s %s", 'Fname:', $_GET['fname']);
            }

            echo "</br>  </br>";

            if(isset($_GET['lname']) && !empty($_GET['lname']))
            {
                printf("%s %s", 'Lname:', $_GET['lname']);
            }
        ?>
</p>
</body>
</html>