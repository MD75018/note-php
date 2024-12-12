<?php
$notes = [
    "Alice" => 15,
    "Bob" => 12,
    "Charlie" => 18,
    "Diana" => 9,
];
$notes ["Eve"] = 14;
$notes["Bob"] = 16;
sort($notes);
foreach ($notes as $key => $value) {
    if ($value >= 10) {
        echo $key. ' : admis.' ."\n";
    }
    else{
        echo $key. ' : refuse'. "\n";
    }
    echo $key.' a obtenu : '   .$value. '/20'. "\n";
};
$moyenne = array_sum($notes) / 4;
echo 'la moyenne des notes est de : '. $moyenne. '/20'."\n";
$meilleurNote = max($notes);
echo 'la meilleur notes est : '. $meilleurNote. '/20';
$notes ["Eve"] = 14;

?>