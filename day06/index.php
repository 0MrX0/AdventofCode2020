<?php
$input = explode("\n\n", file_get_contents("input.txt"));
$c = 0;
foreach ($input as $k => $v)
	$c += count(array_unique(str_split(str_replace("\n", "", $v))));
echo $c. "\n";
$c = 0;
foreach ($input as $k => $v) {
	$group = explode("\n", $v);
	$output = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
	foreach ($group as $kk => $vv)
		foreach ($output as $kkk => $vvv)
			if (!in_array($vvv, str_split($vv)))
				unset($output[$kkk]);
	$c += count($output);
}
echo $c;
?>