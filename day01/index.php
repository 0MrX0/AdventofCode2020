<?php
$input = explode("\n", file_get_contents("input.txt"));
foreach ($input as $v0)
	foreach ($input as $v1)
		if ($v0 + $v1 == 2020)
			echo $v0 * $v1 . "\n";
foreach($input as $v0)
	foreach ($input as $v1)
		foreach ($input as $v2)
			if ($v0 + $v1 + $v2 == 2020)
				echo $v0 * $v1 * $v2 . "\n";
?>
