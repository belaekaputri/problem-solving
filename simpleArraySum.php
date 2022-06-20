<?php
function simpleArraySum($ar=[],$ar_count=0) {
    for($ar_count=0;$ar_count<=count($ar);$ar_count++){
        $result+=$ar[$ar_count];
    }
    return $result;
   }

?>