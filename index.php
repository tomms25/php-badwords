<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>
        <?php
        $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique ullam iusto eos velit quo aspernatur aut, officia quisquam dolores maiores nobis quis est modi obcaecati blanditiis. Pariatur in voluptatibus quos!";
        echo $text;
        ?>
    </h1>



    <!-- Lunghezza paragrafo -->
    <h1>
        <b>Il paragrafo è di:</b>
        <?php
            echo strlen($text);
        ?>
    </h1>

    <!-- Spiegazione Massimo -->
    <!-- <form action="index.php" method="get">
    <input type="text" name="pippo" id="">
    <button type="submit">submit</button> -->
    
</form>
    <!-- Parola censurata -->
    <h1>
        <?php
        $censoredWord = '';
        if (isset($_GET['pippo']))
            $censoredWord = $_GET['pippo'];
        $newText = str_replace($censoredWord, '***', $text);
        echo $newText;
        ?>
    </h1>


    
</body>
</html>