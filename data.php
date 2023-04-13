<?php
//prepare output array
$data = array('lat' => $_POST['lat'], 'long' => $_POST['long']);

//encode array with PHP json_encode and print output
echo json_encode($data);
// return json_decode($_POST['data']);
// return;


file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
