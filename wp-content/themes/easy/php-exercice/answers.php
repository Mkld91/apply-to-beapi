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

$array = array(1,2,3,4,5);
print_r(array_values($array));

$averagevalue = array_sum ($array)/count($array);
echo ($averagevalue);

if(in_array(20, $array))
    echo "Yay 20";

$maxvalue = max($array);

