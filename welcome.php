<?php 

// PHP variable
$title = 'PHP page';

// PHP integer
$int = 1;
$int2 = 2;

// float
$int3 = 2.5;

// incremental
$int3++;
$int3--;

// or statement
if($int == 1 || $int2 == 5) {
    echo 'Hi';
}

// boolean
$coolBoolean = true;

// null
$var = null;

// array
$groceries = array('Milk', 'Eggs', 'Bacon');

// changing values in an array
$groceries[0] = 'Juice';

// adding new values to the array
array_push($groceries, 'Salad');

// delete value from an array
unset($groceries[3]);

// concat using '.' symbol 
echo 'Welcome to my ' . $title; 

echo $int + $int2;

// boolean value is either true or false, 1 or 0
echo $coolBoolean;

// returns null (you will see nothing on the frontend)
echo $var;

// echoing an array needs to specify an index (ALWAYS)
echo $groceries[1];

// printing the full array
print_r($groceries);

// counting the array
echo count($groceries);
?>