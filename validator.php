<?php 
$pass = $_GET['key'];
$millis =round(microtime(true) * 1000);
$map = [
'z'=>0,
'A'=>1,
'4'=>2,
'y'=>3,
'B'=>4,
'x'=>5,
'C'=>6,
'w'=>7,
'D'=>8,
'*'=>9,
'v'=>10,
'E'=>11,
'u'=>12,
'F'=>13,
't'=>14,
'G'=>15,
's'=>16,
'H'=>17,
'r'=>18,
'I'=>19,
'!'=>20,
'q'=>21,
'J'=>22,
'p'=>23,
'7'=>24,
'K'=>25,
'@'=>26,
'1'=>27,
'o'=>28,
'5'=>29,
'L'=>30,
'n'=>31,
'#'=>32,
'M'=>33,
'2'=>34,
'm'=>35,
'&'=>36,
'N'=>37,
'l'=>38,
'O'=>39,
'-'=>40,
'k'=>41,
'9'=>42,
'P'=>43,
'j'=>44,
'Q'=>45,
'i'=>46,
'R'=>47,
'3'=>48,
'h'=>49,
'S'=>50,
'g'=>51,
'$'=>52,
'T'=>53,
'f'=>54,
'6'=>55,
'U'=>56,
'e'=>57,
'V'=>58,
'd'=>59,
'W'=>60,
'c'=>61,
'X'=>62,
'b'=>63,
'Y'=>64,
'_'=>65,
'a'=>66,
'8'=>67,
'Z'=>68,
'0'=>69
];
$seeds=[14358=>37];
$time = round($millis/60000);

$s=$time%100;
$user =  ($map[$pass[1]]+140-$s)%70 + 70*(($map[$pass[4]]+140-$s)%70) + 4900*(($map[$pass[3]]+140-$s)%70);
if(array_key_exists($user, $seeds))
$a2 = $time + $seeds[$user];
else
$a2 = -1;
if($a2%343000 == ($map[$pass[5]]+140-$s)%70 + 70*(($map[$pass[2]]+140-$s)%70) + 4900*(($map[$pass[0]]+140-$s)%70)){
echo $user;
}else{
$time=$time-1;
$s=$time%100;
$user =  ($map[$pass[1]]+140-$s)%70 + 70*(($map[$pass[4]]+140-$s)%70) + 4900*(($map[$pass[3]]+140-$s)%70);
if(array_key_exists($user, $seeds))
$a2 = $time + $seeds[$user];
else
$a2 = -1;
if($a2%343000 == ($map[$pass[5]]+140-$s)%70 + 70*(($map[$pass[2]]+140-$s)%70) + 4900*(($map[$pass[0]]+140-$s)%70)){
echo $user;
}else{
echo "INVALID";
}
}
?>