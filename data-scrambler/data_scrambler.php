

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <title>Data Scrambler</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="colum colum-60 colum-offset-20">
                <h2>Data Scrambler</h2>
                <p>Mini project</p>
            </div>
        </div>
    <div class="row">
        <div class="colum colum-60 colum-offset-20">
           
            <form method="POST" action="">

                <label for="key">Key</label>
                <input type="text" name="key" id="key">
                <label for="data">Data</label>
                <textarea name="data" id="data"></textarea>
                <label for="result">Result</label>
                <textarea id="result"></textarea>
                <button type='submit'>Do It For Me</button>
           
            </form>
        </div>
    </div>
</div>
</body>
</html>