<?php
$input = explode("\n\n", file_get_contents("input.txt"));
foreach ($input as $k => $v) {
	$temp = preg_split('/\s/', $v);
	foreach ($temp as $vv) {
		$data = explode(":", $vv);
		$output[$k][$data[0]] = $data[1];
	}
}
$c = 0;
foreach ($output as $k => $v)
	if (isset($v["byr"]) && isset($v["iyr"]) && isset($v["eyr"]) && isset($v["hgt"]) && isset($v["hcl"]) && isset($v["ecl"]) && isset($v["pid"]))
		$c++;
echo $c, "\n";

$c = 0;
foreach ($output as $k => $v)
	if (isset($v["byr"]) && isset($v["iyr"]) && isset($v["eyr"]) && isset($v["hgt"]) && isset($v["hcl"]) && isset($v["ecl"]) && isset($v["pid"]))
		if ($v["byr"] >= 1920 && $v["byr"] <= 2002 && $v["iyr"] >= 2010 && $v["iyr"] <= 2020 && $v["eyr"] >= 2020 && $v["eyr"] <= 2030 && preg_match("/^#(\d|[a-f]){6}$/", $v["hcl"]) && preg_match("/^(amb|blu|brn|gry|grn|hzl|oth)$/", $v["ecl"]) && preg_match("/^(\d){9}$/", $v["pid"]))
			if (preg_match("/^\d\d\dcm$/", $v["hgt"]) && substr($v["hgt"], 0, strlen($v["hgt"]) - 2) >= 150 && substr($v["hgt"], 0, strlen($v["hgt"]) - 2) <= 193)
				$c++;
			else if (preg_match("/^\d\din$/", $v["hgt"]) && substr($v["hgt"], 0, strlen($v["hgt"]) - 2) >= 59 && substr($v["hgt"], 0, strlen($v["hgt"]) - 2) <= 76)
				$c++;

echo $c;
?>