<html lang="en">
<head>
    <title>Prime</title>
</head>
<body>
    <a href="/prime.html">Go Back</a><br/>
    <?php
        $minNum=$_REQUEST['min_number'];
        $maxNum=$_REQUEST['max_number'];
        
        $fileName = "previous_primes.txt";
        $fp=fopen($fileName, 'w');
        
        $count=0;
        if($maxNum>20000)
        
        {
            exit("Are you trying to make your browser cry? Try a number smaller than 20,000 so we don't all die of boredom");
        }

        if($maxNum<1)
        {
            exit("Both numbers must be greater than 0");
        }

        if($minNum<1)
        {
            exit("Both numbers must be greater than 0");
        }

        if($minNum>=$maxNum)
        {
            exit("The starting number must be less than the ending number");
        }
        
        print("The prime numbers in your range are: <br/>");
        
        for($y=$minNum; $y<=$maxNum; $y++)
        {
            
            if($y==2)
            {
                $prime=true;
            } elseif($y==1)
            {
                $prime=false;
            } else
            {
                $check=ceil(sqrt($y));
                $prime=true; 
                
                for($x=2; $x<=$check; $x++)
                {
                    $remNum=$y%$x; //modulus, 0 = no remainder
                    if($remNum==0)
                    {
                        $prime=false;
                        break;
                    }
                }
            }
            
            if($prime==true)
            {
                print($y . "<br/>"); //break separated
                $count=$count+1;
                fwrite($fp, $y . ", ");
            } 
        }
        
        print("There are " . $count . " prime numbers in the range: " . $minNum . " to " . $maxNum . "<br/>");
        print("Results saved --> previous_primes.txt");
        fwrite($fp, "\nThere are " . $count . " prime numbers in the range: " . $minNum . " to " . $maxNum);
        fclose($fp);
    ?>
</body>
</html>
