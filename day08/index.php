<?php
$input = explode("\n", file_get_contents("input.txt"));
$acc = 0;
$i = 0;
$is = array();
while (!in_array($i, $is) && $i < count($input)) {
	$is[] = $i;
	$cmd = substr($input[$i], 0, 3);
	$arg = substr($input[$i], 4);
	if ($cmd == "acc")
		$acc += (int)$arg;
	elseif ($cmd == "jmp")
		$i += (int)$arg - 1;
	$i++;
}
echo $acc . "\n";

$acc = 0;
for ($j = 0; $j < count($input); $j++) {

	$output = $input;
	$cmd = substr($input[$j], 0, 3);
	$arg = substr($input[$j], 4);
	if ($cmd == "jmp")
		$output[$j] = "nop " . $arg;
	elseif ($cmd == "nop")
		$output[$j] = "jmp " . $arg;

	$acc = 0;
	$i = 0;
	$is = array();
	while (!in_array($i, $is) && $i < count($output)) {
		$is[] = $i;
		$cmd = substr($output[$i], 0, 3);
		$arg = substr($output[$i], 4);
		if ($cmd == "acc")
			$acc += (int)$arg;
		elseif ($cmd == "jmp")
			$i += (int)$arg - 1;
		$i++;
	}
	if ($i == count($input))
		break;
}
echo $acc . "\n";
?>