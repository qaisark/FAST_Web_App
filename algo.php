<?php

$positiveWords = array("good", "great", "approve", "thanks", "amazing", "calm", "love", "classic", "cool", "fabulous", "fair", "favorable", "fortunate", "fine", "impressive");
$negativeWords = array("bad", "annoy", "broken", "boring", "confused", "corrupt", "damage", "fail", "foul", "can't", "deny", "imperfect", "negative", "not", "poor");

$positiveFlag = 0;
$negativeFlag = 0;

$string = "I love this game it has so much detail and it's free! Usually car simulators that have this much detail would cost money. You should get this game. By far the best car game I have";
$pieces = explode(" ", $string);

$positiveSame= array_intersect($positiveWords, $pieces);
$negativeSame = array_intersect($negativeWords, $pieces);

if(count($positiveSame) > count($negativeSame))
{
    $positiveFlag += 10;
}
else
{
    $negativeFlag += 5;
}

if(count($positiveSame) == count($negativeSame))
{
    $positiveFlag += 2;
}

if(count($positiveSame) == 0 && count($negativeSame) == 0)
{
    $positiveFlag = 0;
    $negativeFlag = 0;
}

echo $positiveFlag;
echo " / ". $negativeFlag;