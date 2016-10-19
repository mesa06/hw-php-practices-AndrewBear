<!--B. 寫程式算一下: 利用1,2,3,4這四個數字，可組出多少個數字互不相同三位數?-->

<?php

// n!
function f($n){
    if($n == 1 || $n == 0 ) {
    return 1;
    } 
    else {
    return $n * f($n - 1);
    }
}
// P n取m
function P($n, $m){
    return f($n) / f($n - $m);
}
// P 4取3
echo P(4, 3);

?>