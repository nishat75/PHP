<?php

function bunkdays($missing){
    $daystomiss = $missing;
    if ($daystomiss==3) {
        echo "  You cannot miss anymore classes";
    } else{
        echo "you have few more days left to miss";
    }
}
bunkdays(2);
        
    
    
