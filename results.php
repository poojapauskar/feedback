<html>
<head>
<link rel="stylesheet" type="text/css" href="results.css">

<style>
</style>
<body>

<script type="text/javascript">
  setTimeout(function(){
   window.location.reload(1);
}, 1000);
</script>

<?php

$url_check = 'https://feedback-list.herokuapp.com/get_feedback/';
$options_check = array(
  'http' => array(
    /*'header'  => array(
                  'LOGGED-IN: 1',
                ),*/
    'method'  => 'GET',
  ),
);
$context_check = stream_context_create($options_check);
$output_check = file_get_contents($url_check, false,$context_check);
/*echo $output_check;*/
$arr_check = json_decode($output_check,true);

?>




<h4>Results</h4>

<table>
  <tr>
    <th>Good</th>
    <th>Bad</th>
  </tr>

  <tr>
    <td><?php echo $arr_check[0]['good'] ?></td>
    <td><?php echo $arr_check[0]['bad']; ?></td> 
  </tr>
  
</table>


</body>
</html>



