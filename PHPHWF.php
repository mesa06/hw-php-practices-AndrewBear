<!--F. 有一個球從 100 公尺處落下，每次落地都反彈至原高度的二分之一，請問它第五次落地後，會反彈到多高?-->

<?php

$height = 100;

for ($i = 1; $i <= 5; $i++ ){
    $height = $height * 0.5;
}
echo $height;

?>