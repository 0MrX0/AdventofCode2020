<pre>
<?php
$input = explode("\n", file_get_contents("input.txt"));
$biggestID = 0;
foreach ($input as $v)
	$biggestID = getSeatID($v) > $biggestID ? getSeatID($v) : $biggestID;
echo $biggestID."\n";

foreach ($input as $v)
	$ids[] = getSeatID($v);
sort($ids);
foreach ($ids as $k => $v)
	if ($ids[$k - 1] == $v - 2)
		echo $v - 1;
	

function getSeatID($boardingPass) {
	$groups = str_split($boardingPass);
	$range = array("F" => 0, "B" => 127, "L" => 0, "R" => 7);
	foreach ($groups as $v)
		if ($v == "F")
			$range["B"] = floor(($range["B"]-$range["F"])/2 + $range["F"]);
		else if ($v == "B")
			$range["F"] = ceil(($range["B"] - $range["F"]) / 2 + $range["F"]);
		else if ($v == "L")
			$range["R"] = floor(($range["R"] - $range["L"]) / 2 + $range["L"]);
		else if ($v == "R")
			$range["L"] = ceil(($range["R"] - $range["L"]) / 2 + $range["L"]);
	return $range["F"] * 8 + $range["L"];
}
?>