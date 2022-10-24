
<form name="form" action="" method="get">
<label for="number">Enter N number:</label>
<input type="number" id="num" name="num"><br>
<label for="key">Enter k:</label>
<input type="number" id="key" name="key">
<input type="submit" name= "submit">
</form>

<?php
$arr = array();
$tempVal="";
if (isset($_GET['submit']) ){
    if ((isset($_GET['num']))&& (isset($_GET['key'])))       //Get the value
        {
            $n= $_GET['num'];
            $k=$_GET['key'];
            echo "N: {$n}, Key: {$k} ";
            echo nl2br ("\n");

        }
    for($i=1; $i<=$n; $i++){
        array_push($arr, (string)$i);           //We cast the numbers to string and put them in the array
        }

    for($i=0; $i<$n; $i++){
        for($j=0; $j<$n; $j++){
            if(strcmp($arr[$i], $arr[$j])<0){           // We compare the string between them and order them
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    

    $key = array_search((string)$k, $arr) +1;     // find the position of the giving number

    echo "The number's position is: {$key}";
}
?>