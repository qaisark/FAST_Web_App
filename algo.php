<?php

$positiveWords = array("good", "great", "approve", "thanks", "amazing", "calm", "love", "classic", "cool", "fabulous", "fair", "favorable", "fortunate", "fine", "impressive");
$negativeWords = array("bad", "annoy", "broken", "boring", "confused", "corrupt", "damage", "fail", "foul", "can't", "deny", "imperfect", "negative", "not", "poor");

$positiveFlag = 0;
$negativeFlag = 0;

$string = "NOT FOR YOUNG CHILDREN My husband was sitting with our 8 year old son on his Kids FireHD, and while playing the game an inappropriate ad came up with nearly naked women and very adult content.";
$pieces = explode(" ", $string);

$pieces = array_map('strtolower', $pieces);

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

//Add these flags to user points