<?php
$input = explode("\n", file_get_contents("input.txt"));
foreach ($input as $k=>$v)
	$map[$k] = str_split($v);

echo countTrees(3, 1, $map)."\n";

echo countTrees(1, 1, $map) * countTrees(3, 1, $map) * countTrees(5, 1, $map) * countTrees(7, 1, $map) * countTrees(1, 2, $map);

function countTrees($slopeX, $slopeY, $map) {
	$x = 0;
	$y = 0;
	$c = 0;
	while ($y < count($map)) {
		if ($map[$y][$x] == "#")
			$c++;
		$x = ($x + $slopeX) % count($map[0]);
		$y += $slopeY;
	}
	return $c;
}
?>