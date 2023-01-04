<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.bigbasket.com/pc/fruits-vegetables/fresh-vegetables/?nc=nb#!page=2');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
preg_match_all('!//www.bigbasket.com/media/uploads/p/s/(.*).jpg!',$result,$data);
$finalArr=array_unique($data[0]);
 foreach($finalArr as $list){
    echo "<img src = '$list'/>";
 }

