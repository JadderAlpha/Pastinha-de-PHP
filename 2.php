<?php
$last =1;
$outro =1;
$real =0;
echo 1 ."<br>";;
echo 1 ."<br>";
for($i=0;$i <21;$i++){
    if ($real != 0) 
echo $real."<br>";
$real = $last +$outro;
$outro = $last;
$last=$real;
}
