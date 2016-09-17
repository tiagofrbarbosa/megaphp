
<?php

$j=0;
$chaos_teory=10;

while($j<$chaos_teory){
for($i=0;$i<=6;$i++){

	dejavu:
	$rannum = rand(1,60);
	if(in_array($rannum, $gnumber)){
			goto dejavu;
	}

$gnumber[$i] = $rannum;

if($i==5){
$game = [$gnumber[0],$gnumber[1],$gnumber[2],$gnumber[3],$gnumber[4],$gnumber[5]];
sort($game);

for($i=0;$i<=5;$i++){
print($game[$i] . " ");
if($i==5){
?><br><?php
		 }

		}
	}		
}
$j++;
}



