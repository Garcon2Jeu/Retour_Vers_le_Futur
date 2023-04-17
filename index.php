<?php

$presentTime = new DateTime();
$destinationTime = new DateTime("2026-11-03 16:20");
$interval = $destinationTime->diff($presentTime);

echo $presentTime->format("M-d-Y A h:i");
echo "<br>";
echo $destinationTime->format("M-d-Y A h:i");
echo "<br>";
echo $interval->format("%y ans, %m mois, %d jours, %h heures, %i minutes");
