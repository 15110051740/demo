<?php
$A=[1,3,6,9];
$B=[2,4,5,8,20];
function  Combine($A,$B)
{
	$arr=array_merge($A,$B);
    // var_dump($arr);die;
	$count=count($arr);
	for ($i=0; $i <$count ; $i++) { 
		for ($j=$i+1; $j <$count ; $j++) { 
			if($arr[$i]>$arr[$j])
			{
				$temp=$arr[$i];
				$arr[$i]=$arr[$j];
				$arr[$j]=$temp;
			}
		}
	}
   return $arr;
}

print_r(Combine($A,$B));