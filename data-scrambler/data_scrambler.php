<?php

    include_once    "scramble_functions.php";

    $task = 'encode';

    if(isset($_GET['task']) && $_GET['task']!='')
    {
        $task = $_GET['task'];
    }
    $original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $key = 'abcdefghijklmnopqrstuvwxyz1234567890';

    if( 'key'== $task )
    {
        $original_key = str_split($key);
        shuffle($original_key);

        $key = join('', $original_key);
    }
    elseif( isset($_POST['key']) && $_POST['key']!='' ) // retrun key value 
    {
        $key = $_POST['key'];
    }
    
   $encode_data = '';
    if( 'encode' == $task )
    {
        $data = $_POST['data'] ?? '';
        
        if( $data != '' )
        {
            $encode_data = dataencode($data, $key);
        }
    }


    if( 'decode' == $task )
    {
        $data = $_POST['data'] ?? '';
        
        if( $data != '' )
        {
            $encode_data = datadecode($data, $key);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Scrambler</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body{
            margin: 50px;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="colum colum-60 colum-offset-20">
                <h2>Data Scrambler</h2>
                <p>use this application to scramble your data</p>
                <p>
                    <a href="/php/data-scrambler/data_scrambler.php?task=encode">Encode||</a>
                    <a href="/php/data-scrambler/data_scrambler.php?task=decode">Decode||</a>
                    <a href="/php/data-scrambler/data_scrambler.php?task=key">Generate Key</a>
                </p>
            </div>
        </div>
    <div class="row">
        <div class="colum colum-60 colum-offset-20">          
            <form method="POST" action="data_scrambler.php<?php if('decode'== $task) { echo "?task=decode"; } ?>">
                <label for="key">Key</label>
                <input type="text" name="key" id="key"<?php displaykey($key);?>>
                <label for="data">Data</label>
                <textarea name="data" id="data"><?php if(isset($_POST['data'])){echo $_POST['data'];}?></textarea>
                <label for="result">Result</label>
                <textarea id="result"><?php echo $encode_data;?></textarea>
                <button type='submit'>Do It For Me</button>           
            </form>
        </div>
    </div>
</div>
</body>
</html>