<?php

#创建一个数组变量，其中保存5个整数
#使用for循环输出该数组中的每个元素

$arr = [10, 30, 15, 20, 12];

for($i=0;  $i<count($arr); $i++){
	echo "$arr[$i] / ";
}
echo '<hr>';
#使用循环计算该数组中每个元素的和，最后输出该和
for($i=0,$sum=0; $i<count($arr); $i++){
	$sum += $arr[$i];
}
echo $sum;

echo '<hr>';
#定义一个函数arrSum($arr)，计算数组中所有元素的和，并返回 —— 形参仅仅是变量名
function arrSum( $arr ){
	for($i=0, $sum=0; $i<count($arr); $i++){
		$sum += $arr[$i];
	}
	####echo $sum;
	return $sum;
}
#调用上述函数三次，每次传递不同的数组做实参 
$result = arrSum([1,3,5]);
echo $result;
echo '<hr>';
#定义一个函数arrAvg($arr)，计算数组中所有元素的平均值，并返回
function arrAvg($arr){
	$sum = arrSum( $arr );
	$avg = $sum/count($arr);
	return  $avg;
	#return arrSum($arr) / count($arr);
}
$result = arrAvg([1,3,5]);
echo $result;