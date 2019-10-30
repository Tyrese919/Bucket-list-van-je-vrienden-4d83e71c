
<?php

echo "hoeveel vrienden wil je hun droom vragen?".PHP_EOL;
$nummer = readline();

$data = array();

for ($i=0; $i < $nummer ; $i++) {
  echo "wat is je naam?".PHP_EOL;
   $deNaam = readline();
  echo "Wat is je droom?".PHP_EOL;
   $deDroom = readline();

  $data[$deNaam]=$deDroom;
}

foreach ($data as $deNaam => $deDroom) {
  echo "$deNaam's droom is: $deDroom".PHP_EOL;
}
