<?php
// while 

$i = 0;

while ($i < 500){
    $i+=50;
    echo "$i<br>";
}

echo "<br/>";

// for

$i = 0;

for($i = 2; $i <= 10; $i++){
    if ($i % 2 == 0) {
        echo "$i es multiplo de 2";
    } echo "<br/>";
} 

echo "<br/>";

// foreach

$Sanrio = array("Hello Kitty" , "kuromi" , "Cinamoron" , "Pochaco");

foreach ($Sanrio as $x) {
    if ($x == "kuromi") continue;
    echo "$x <br/>";
}

?>