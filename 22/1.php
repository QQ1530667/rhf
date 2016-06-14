<?php
	$path1='/home/web/lib/img/cache.php';
	$path2="/home/web/lib/img/aa.php";
	$arr1 = explode('/', $path1);  
    $arr2 = explode('/', $path2);
    // 获取相同路径的部分  
    $intersection = array_intersect_assoc($arr1, $arr2); 
    $depth = 0;  
    for($i=0,$len=count($intersection); $i<$len; $i++){  
        if(!isset($intersection[$i])){  
            $depth = $i;  
           	
        }  
    }  
  
    // 将path2的/ 转为 ../，path1获取后面的部分，然后合拼  
    $tmp = array_merge(array_fill(0, count($arr2)-$depth-1, '..'), array_slice($arr1, $depth));  
  
    $relativePath = implode('/', $tmp);  
  
    print_r($relativePath);  
	
  
?>