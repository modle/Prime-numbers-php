<!doctype html>

<html lang="en">
<head>
    <title>Previous Results</title>
</head>
<body>
    <a href="/prime.html">Go Back</a><br/>
    <?php
        $file = "previous_primes.txt";
        $fp=fopen($file,'r');
        $string="";
        while(!feof($fp))  //feof = while not file end of file
        {
            $string .= fgets($fp,256);
            $string .= "<br/>";
        }
        print ($string);
    ?>
</body>
</html>
