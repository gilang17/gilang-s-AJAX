<?php
$a[] = "Gilang";
$a[] = "Erdo";
$a[] = "Farhan";
$a[] = "Alif";
$a[] = "Sam";
$a[] = "Qory";
$a[] = "Bebeng";

//get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

//lookup all hint from array if $q is different from ""
	if($q !== ""){
		$q = strtolower($q);
		$len = strlen($q);
	foreach ($a as $name){
		if(stristr($q, substr($name, 0, $len))){
			if($hint === ""){
				$hint = $name;
				}else{
				$hint .=", $name";
			}
		}
	}
}

echo $hint === "" ? "no suggestion" : $hint;
?> 