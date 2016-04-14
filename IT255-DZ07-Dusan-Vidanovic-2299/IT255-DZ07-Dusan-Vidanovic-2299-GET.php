<?php

$grad = $_GET['grad'];

if($grad == "Nis") {
	header("Content-type: application/json");
		$informacije = array (
			'Grad' => 'Nis',
			'Broj stanovnika' => 260237,
			'Okrug' => 'Nisavski okrug',
			'Postanski broj' => 18000
		);
	echo json_encode($informacije);

} else {
	header("Content-type: application/json");
	$rezultat = array (
		'rezultat' => 'Unesite kao parametar grad Nis'
	);
	echo json_encode($rezultat);
}

?>