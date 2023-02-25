<?php

#WHILE

echo 'While: ';

$i = 0;
while ($i < 10) {
    echo $i;
    $i ++;
}

#DO WHILE

echo '<br><br> Do While: ';

$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);

#FOR

echo '<br><br> For: ';

for($i = 0; $i < 10; $i++) {
    echo $i;
}