<?php
$input = explode("\n", file_get_contents("input.txt"));
$c = 0;
foreach($input as $v) {
	$temp = explode(" ", $v);
	if (substr_count($temp[2], substr($temp[1], 0, 1)) >= substr($temp[0], 0, strpos($temp[0], "-")) && substr_count($temp[2], substr($temp[1], 0, 1)) <= substr($temp[0], strpos($temp[0], "-") + 1))
		$c++;
}
echo $c."\n";
$c = 0;
foreach ($input as $v) {
	$temp = explode(" ", $v);
	if (substr($temp[2], substr($temp[0], 0, strpos($temp[0], "-")) - 1, 1) == substr($temp[1], 0, 1) xor substr($temp[2], substr($temp[0], strpos($temp[0], "-") + 1) - 1, 1) == substr($temp[1], 0, 1))
		$c++;
}
echo $c;
?>