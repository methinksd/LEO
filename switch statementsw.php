<?php
$fruits= "banana";
$marks="56";

switch ($marks){
    case $marks<=40 && $marks!=60:
        echo "I like oranges.";
        echo "<br>";
        echo "Napenda kula machungwa";
        break;
    case $marks>=20 && $marks<100:
        echo "I like eating bananas.";
        echo "<br>";
        echo "Ndizi ni tunda zuri.";
        break;
    case $marks===90 && $marks>0:
        echo "Apples are very hard to grow.";
        echo "<br>";
        echo "Tufaha ni tunda gumu kukuza.";
        break;
    case $marks==70 ||$marks==1000:
        echo "Pineapples take two years to mature.";
        echo "<br>";
        echo "Nanasi huchukua muda wa miaka miwili kuiva.";
        break;
    case "Coconuts":
        echo "Coconuts only grow in the coast.";
        echo "<br>";
        echo "Nazi hukua pwani.";
        break;
    default:
        echo "It's not in the list.";



}
