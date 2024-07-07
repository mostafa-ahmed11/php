<?php
echo "Q1 <br>";

$films = array("fast","predesination","pursuit","prestige");
$keyword="avatar";
 
foreach($films as $film){

switch($keyword){
    case $film:
        echo "yes";
        break;
        default:
        echo "no";
    }

}

echo "<br> <br> Q2 <br>";

$tests=array(5,4,9,3,1,7,5,8,6);
$max=max($tests);
echo $max ;

echo "<br> <br> Q3 <br>";


$films2 = array("avatar","prestige","avatar","prestige");
$keyword2 ="avatar";
$counted = array_count_values($films2);
$count = $counted[$keyword2];
echo $count ;

echo "<br> <br> Q4/for <br>";
$data = array(1,"tariq", 1.5, true, 7, "s", false);

for ($i = 0; $i < count($data); $i++) {
    if (is_bool($data[$i])) {
        echo "yes";
    } else {
        echo "no";
    }
}


echo "<br> <br> Q4/while <br>";
$data = array(1, "tariq", 1.5, true, 7, "s", false);
$i = 0; 

while ($i < count($data)) {
    if (is_bool($data[$i])) {

        echo "yes";
    } else {
        echo "no";
    }
    
    $i++; 
}

echo "<br> <br> Q5 <br>";
$nums = array(6, 4, 9, 3, 12, 8, 7);
sort($nums);
foreach ($nums as $num) {
    echo $num . " ";
}


echo "<br> <br> Q6 <br>";
$array1 = array("a","b","c","d");
$array2 = array("c","d","e","f");
$sameVal= array_intersect($array1,$array2);
print_r($sameVal) ;