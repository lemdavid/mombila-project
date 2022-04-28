<?php


function GeraHash($qtd){
$day=date ("d");
$month=date ("m");
$year=date ("Y");
$time=time();
$Day_Month_year_time=$day+$month+$year+$time;
$random= rand(0,10000000);
$Day_Month_year_time_random= $Day_Month_year_time+$random;
$uniqid=  uniqid();
$Day_Month_year_time_random_uniqid = $Day_Month_year_time_random.$uniqid;
$Day_Month_year_time_random_uniqid = md5($Day_Month_year_time_random.$uniqid);
$sort=substr($Day_Month_year_time_random_uniqid, 64); // if you want sort length code.
$Caracteres = $sort.'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
$QuantidadeCaracteres = strlen($Caracteres);
$QuantidadeCaracteres--;

$Hash=NULL;
    for($x=1;$x<=$qtd;$x++){
        $Posicao = rand(0,$QuantidadeCaracteres);
        $Hash .= substr($Caracteres,$Posicao,1);
    }

return $Hash;
}




//Here you specify how many characters the returning string must have
$Api_key = GeraHash(64);

?>
