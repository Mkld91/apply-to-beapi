<?php

/*Display String*/
$string = "hello";
$numberstring = "42";
$specialcharstring = "<>?~";
$conditionstring = (true ? "true" : "false");
$i = 0;

echo $string;
echo $numberstring;
echo htmlentities($message);
echo $conditionstring;

/*Loops*/

while($i<=10){
    echo $i;
    $i++;
}

for($n=0;$n<=10;$n++)
{
    echo $n;
}

function funcwhile($n) {
    for($i=0;$i<=$n;$i++)
    {
        echo $i;
    }
}

funcwhile(20);

/*Arrays*/

/* Display All */
$array = array(1,2,3,4,5,10,18,20);
print_r(array_values($array));

/* Average Value */
$averagevalue = array_sum ($array)/count($array);
echo ($averagevalue);

/* Check how many superior or equal to 10 */

$value = 10;
$min = 10;
$max = 20;

$newNumbers = array_filter(
    $array,
    function ($value) use($min,$max) {
        return ($value >= $min && $value <= $max);
    }
);

print_r($newNumbers);

/* Check if 20 */
if(in_array(20, $array))
    echo "Yay 20";

/* Max Value */
$maxvalue = max($array);

