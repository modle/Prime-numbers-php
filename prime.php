<html lang="en">
<head>
    <title>Prime</title>
</head>
<body>
    <?php
        $minNum=$_REQUEST['min_number'];
        $maxNum=$_REQUEST['max_number'];
        print("The prime numbers in your range are: <br/>");
        $count=0;
        
        for($y=$minNum; $y<=$maxNum; $y++)
        {
            
            if($y==2)
            {
                $prime=1;
            } elseif($y==1)
            {
                $prime=0;
            } else
            {
                $check=ceil(sqrt($y));
                $prime=true; 
                
                for($x=2; $x<=$check; $x++)
                {
                    $remNum=$y%$x; //modulus, 0 = no remainder
                
                    //print("remainder when dividing by " . $x . ": " . $remNum . "<br/>");
                
                    if($remNum==0)
                    {
                        $prime=0;
                        break;
                    }
                }
            }
            
            if($prime==true)
            {
                print($y . "<br/>");
                $count=$count+1;
            } else
            {
                //print($num . " is NOT a prime number <br/>");
            }
        }
        
        print("There are " . $count . " prime numbers in your range <br/>");
        
    ?>
</body>
</html>
