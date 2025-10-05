<?php

function evenOdd($count){


   
for($i=1 ; $i<=$count ; $i++){
    if($i%2==0){
        echo "$i is even.<br>";
    } else{
        echo "$i is odd.<br>";

    }
   
}
}
evenOdd(10);



?>