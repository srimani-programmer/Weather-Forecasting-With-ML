<?php
	$word=array_merge(range('a', 'z'),range('A','Z'),range(0, 9),range(0, 9));
	shuffle($word);
	echo substr(implode($word),0,6);

?>