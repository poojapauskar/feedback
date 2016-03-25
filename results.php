<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Simple HTML / CSS bar-charts</title>
    <link rel="stylesheet" href="css/style.css">
    </head>

  <body>

 <script type="text/javascript">
/*  setTimeout(function(){
   window.location.reload(1);
}, 1000);*/
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

    <!-- Horizontal, rounded -->

<div class="container horizontal rounded">
  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="boring">
        <span><?php echo $arr_check[0]['this is boring'];echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="know">
        <span><?php echo $arr_check[0]['need to know more...'];echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="sleepy">
        <span><?php echo $arr_check[0]['i feel sleepy'];echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="slow">
        <span><?php echo $arr_check[0]['please slow down'];echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="interest">
        <span><?php echo $arr_check[0]['this is interesting'];echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="saturate">
        <span><?php echo $arr_check[0]['im saturated'];echo '%'; ?></span>
      </div>
    </div>
  </div>
  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="lovin">
        <span><?php echo $arr_check[0]['im lovin it'];echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="chai">
        <span><?php echo $arr_check[0]['i need a chai break'];echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="track">
        <span><?php echo $arr_check[0]['lost the track'];echo '%'; ?></span>
      </div>
    </div>
  </div>
  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="info">
        <span><?php echo $arr_check[0]['this is informative'];echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="world">
        <span><?php echo $arr_check[0]['best thing in the WORLD'];echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="why">
        <span><?php echo $arr_check[0]['why am i here???'];echo '%'; ?></span>
      </div>
    </div>
  </div>
</div>

<!-- Horizontal, flat -->


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
