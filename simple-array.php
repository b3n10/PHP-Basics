<?php
$title = "Simple Array (Weather)";
include 'head-tag.php';

$weather_array = [
     'rain',
     'sunshine',
     'clouds',
     'hail',
     'sleet',
     'snow',
     'wind'
];

echo "<h1>{$title}</h1>";
echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had {$weather_array[5]} and {$weather_array[6]}. Then came {$weather_array[1]} with a few {$weather_array[2]} and some {$weather_array[0]}. At least we didn't get any {$weather_array[3]} or {$weather_array[4]}.</p>";

include 'end-tag.php';
 ?>
