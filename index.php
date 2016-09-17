
<?php

define("singularity", 10);
define("chaos_theory", 5);
define("big_bang", 1);
define("big_crunch", 60);

$black_hole = 0;

while($black_hole<singularity){

			for($i=0;$i<=chaos_theory;$i++){

			dejavu:
			$bullet = rand(big_bang,big_crunch);
			if(in_array($bullet, $revolver)){
					goto dejavu;
			}
		 

$revolver[$i] = $bullet;

if($i==chaos_theory){
$game = $revolver;
sort($game);

for($i=0;$i<=chaos_theory;$i++){
print($game[$i] . " ");
if($i==chaos_theory){
?><br><?php
		 }

		}
	}		
}
$black_hole++;
}



