<?php




function cloan($loan,$duration,$interest){

$basic_amount=$loan/$duration;
$interest_fee_per_month=$basic_amount * ($interest/$duration);
$total_pay = $basic_amount + $interest_fee_per_month;
 return $total_pay;

}
cloan(5000,5,0.05);

function isabletogeloan($income,$expense,$cloan){
   
    $savings=$income - $expense;

    if($savings > $cloan ){
        echo "yes,you can";
    }else
    {
        echo "no,ou can't";
    }
}
isabletogeloan(5000,3000,cloan(5000,5,0.05));