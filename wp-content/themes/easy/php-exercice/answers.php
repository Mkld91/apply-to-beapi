<?php

$string = "hello";
$numberstring = "42";
$specialcharstring = "<>?~";
$conditionstring = (true ? "true" : "false");
$i = 0;

echo $string;
echo $numberstring;
echo htmlentities($message);
echo $conditionstring;

while($i<=10){
    echo $i;
    $i++;
}

for($n=0;$n<=10;$n++)
{
    echo $i;
}

function funcwhile(n) {

}