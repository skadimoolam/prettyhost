<?php

$current_dir = opendir('../');

while($entryName=readdir($current_dir)) {
	$dirArray[]=$entryName;
}

print_r(json_encode($dirArray));
?>