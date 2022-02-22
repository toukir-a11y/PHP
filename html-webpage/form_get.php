

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
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

                <?php require_once 'submit.php';?>
                
            </div>
        </div>
    <div class="row">
        <div class="colum colum-60 colum-offset-20">
            <form method ="GET">
                <label for="fname">First name</label><br>
                <input type="text" id="fname" name="fname">
                
                <label for="lname">Last name</label><br>
                <input type="text" id="lname" name="lname">

                <button type='submit'>submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>


<?php // GET methon, Post method its a HTTP VERB

      // get methon using for data read 

      // post method using for data save, create  and update 

      // Patch method using for data update but not the full data set some data update in full data set 

      // delete method using for deleting data set or data 
?>