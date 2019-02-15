<?php

$question = <<<EOD
01110000 01110010 01101001 01101110 01110100 00100000 01101111 01110101 01110100 00100000 01111001 01101111 01110101 01110010 00100000 01101110 01100001 01101101 01100101 00100000 01110111 01101001 01110100 01101000 00100000 01101111 01101110 01100101 00100000 01101111 01100110 00100000 01110000 01101000 01110000 00100000 01101100 01101111 01101111 01110000 01110011
EOD;

$question = explode(' ', $question);
array_walk($question, function($bin){
	echo chr(bindec($bin));
});

echo PHP_EOL;

$myNameInArray = str_split('Aboozar Ghaffari');

$nameDec = '';
$nameBin = '';

// obviously we can use any php loop like for / foreach / while / ... too

array_walk($myNameInArray, function ($chr) use (&$nameDec, &$nameBin){
    $nameDec .= str_pad($chr, 9, ' ', STR_PAD_BOTH);
    $nameBin .= sprintf( "%08d",decbin(ord($chr))) . ' ';
});
echo PHP_EOL;

echo $nameDec;
echo PHP_EOL;

echo $nameBin;
echo PHP_EOL;