<form name="form" action="" method="get">
<label for="error">Enter N error:</label>
<input type="number" id="error" name="error" min="0" max="1000"><br>
<label for="warning">Enter M warning:</label>
<input type="number" id="warning" name="warning" min="0" max="1000">
<input type="submit" name= "submit">
</form>

<?php 
if (isset($_GET['submit']) ){
    if ((isset($_GET['error']))&& (isset($_GET['warning'])))   // we get the values of n and m
        {
            $n= $_GET['error'];
            $m=$_GET['warning'];
            echo "Error: {$n}, Warning: {$m} ";
            echo nl2br ("\n");

        }

        $commit =0;
        if (($n % 2 != 0) && ($m == 0))          //we check if the value of n is odd and m is 0 if yes there is no solution
            {
                $commit= -1;
            }
            else {
                
                while($n > 0 || $m > 0) {               //then we correct the error and the warning step by step depend on the case
                    while ($n > 1)
                    {
                        $n = $n - 2;
                        $commit++;
                       
                    }
                    if ($n == 0 && $m >0 && $m < 4 )
                    {
                        do {
                            $m++;
                            $commit++;
                            
                        } while ($m != 4);
        
                    }
                    if ($m >= 2)
                    {
                        $m = $m - 2;
                        $n++;
                        $commit++;
                       
                    }
                    
                    
                }
            }
        
        echo "The minimal commit is: {$commit}";        

    }





?>