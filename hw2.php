<?php
function largestnum($n1,$n2,$n3,$n4){


if ($n1 > $n2 && $n1 > $n3 && $n1 > $n4) {
  echo "n1 is largest";
} elseif ($n2 > $n1 && $n2 > $n3 && $n2 > $n4) {
  echo "n2 is largest";
} elseif ($n3 > $n1 && $n3 > $n2 && $n3 > $n4){
  echo "n3 is largest";
}
  else {
  echo "n4 is largest";
  }
 }
 
 largestnum(10,40,35,25);
 
?>