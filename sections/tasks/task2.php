<?php

$nums = range(1,10);

echo "<p></p>";
echo "<table>";
foreach($nums as $x){
    echo "<tr>";
   
    foreach($nums as $y){
        echo "<td>";
       echo $x*$y." " . "</td>";
    }
    echo "</tr>";
} 
echo "</table>";
