<?php  
$content = file_get_contents('alice.txt');
$words = str_word_count($content, 1);
$words = array_count_values(str_word_count($str, 1));
print_r($words);


foreach($word_count as $word => $count){
	echo $word   .'='. $count . PHP_EOL;
}
?>