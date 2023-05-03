<?php  
$content=file_get_contents('Alice.txt');
$words=str_word_count($content,1);
$word_count=array_count_values($count);

foreach($word_count as $word => $count){
	echo $word  .' <br>='. $count . PHP_EOL;
}
?>  