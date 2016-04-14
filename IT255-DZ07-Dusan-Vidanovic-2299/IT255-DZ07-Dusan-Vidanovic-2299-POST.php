<?php

$stranicaKocke = $_POST['stranicaKocke'];
header("Content-type: application/json");

$rezultat = array (
'povrsinaKocke:' => (6*($stranicaKocke*$stranicaKocke)),
'zapreminaKocke:' => ($stranicaKocke*$stranicaKocke*$stranicaKocke)
);

echo json_encode($rezultat);

?>