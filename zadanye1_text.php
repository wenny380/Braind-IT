<?php 

if(isset($_GET['articleText']))
{
    echo $_GET['articleText'];
}
else{
    echo 'The array is empty';
}


?>