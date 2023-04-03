
<input style="text" name=""/>
<br>
<input style="text" name=""/>

<?php
$array = [900, 4, 154, 1];
$array2 = ["fruit" => "apple", "name" => "Alexey", "city" => "Ulyanowsk"];

rsort($array);

foreach ($array2 as $item => $value) {
	echo "<br>";
	echo "$item : $value";
}


for ($i = 0; $i < count($array); $i++) {
	echo "<br>";
	echo $array[$i];
}