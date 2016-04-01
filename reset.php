<?php


$url_reset = 'http://localhost:8000/reset/';
$options_reset = array(
  'http' => array(    'method'  => 'GET',
  ),
);
$context_reset = stream_context_create($options_reset);
$output_reset = file_get_contents($url_reset, false,$context_reset);
$arr_reset = json_decode($output_reset,true);

header("Location: http://localhost/feedback/results.php");
?>