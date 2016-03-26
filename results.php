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
        <span><?php echo ($arr_check[0]['this is boring']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="know">
        <span><?php echo ($arr_check[0]['need to know more...']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="sleepy">
        <span><?php echo ($arr_check[0]['i feel sleepy']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="slow">
        <span><?php echo ($arr_check[0]['please slow down']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="interest">
        <span><?php echo ($arr_check[0]['this is interesting']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="saturate">
        <span><?php echo ($arr_check[0]['im saturated']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>
  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="lovin">
        <span><?php echo ($arr_check[0]['im lovin it']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="chai">
        <span><?php echo ($arr_check[0]['i need a chai break']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="track">
        <span><?php echo ($arr_check[0]['lost the track']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>
  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="info">
        <span><?php echo ($arr_check[0]['this is informative']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="world">
        <span><?php echo ($arr_check[0]['best thing in the WORLD']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
    <div class="progress-track">
      <div class="progress-fill" id="why">
        <span><?php echo ($arr_check[0]['why am i here???']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>
</div>

<!-- Horizontal, flat -->


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>


<?php

if($arr_check[0]['this is boring']>$arr_check[0]['need to know more...'] && $arr_check[0]['this is boring']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['this is boring']>$arr_check[0]['please slow down'] && $arr_check[0]['this is boring']>$arr_check[0]['this is interesting'] && $arr_check[0]['this is boring']>$arr_check[0]['im saturated'] && $arr_check[0]['this is boring']>$arr_check[0]['im lovin it'] && $arr_check[0]['this is boring']>$arr_check[0]['i need a chai break'] && $arr_check[0]['this is boring']>$arr_check[0]['lost the track'] && $arr_check[0]['this is boring']>$arr_check[0]['this is informative'] && $arr_check[0]['this is boring']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['this is boring']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['this is boring'] * 0.4);echo "%";

if($arr_check[0]['need to know more...']>$arr_check[0]['this is boring'] && $arr_check[0]['need to know more...']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['need to know more...']>$arr_check[0]['please slow down'] && $arr_check[0]['need to know more...']>$arr_check[0]['this is interesting'] && $arr_check[0]['need to know more...']>$arr_check[0]['im saturated'] && $arr_check[0]['need to know more...']>$arr_check[0]['im lovin it'] && $arr_check[0]['need to know more...']>$arr_check[0]['i need a chai break'] && $arr_check[0]['need to know more...']>$arr_check[0]['lost the track'] && $arr_check[0]['need to know more...']>$arr_check[0]['this is informative'] && $arr_check[0]['need to know more...']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['need to know more...']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['need to know more...'] * 0.4);echo "%";
  
if($arr_check[0]['i feel sleepy']>$arr_check[0]['need to know more...'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['this is boring'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['please slow down'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['this is interesting'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['im saturated'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['im lovin it'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['i need a chai break'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['lost the track'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['i feel sleepy'] * 0.4);echo "%";
if($arr_check[0]['please slow down']>$arr_check[0]['need to know more...'] && $arr_check[0]['please slow down']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['please slow down']>$arr_check[0]['this is boring'] && $arr_check[0]['please slow down']>$arr_check[0]['this is interesting'] && $arr_check[0]['please slow down']>$arr_check[0]['im saturated'] && $arr_check[0]['please slow down']>$arr_check[0]['im lovin it'] && $arr_check[0]['please slow down']>$arr_check[0]['i need a chai break'] && $arr_check[0]['please slow down']>$arr_check[0]['lost the track'] && $arr_check[0]['please slow down']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['please slow down']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['please slow down'] * 0.4);echo "%";
if($arr_check[0]['this is interesting']>$arr_check[0]['need to know more...'] && $arr_check[0]['this is interesting']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['this is interesting']>$arr_check[0]['please slow down'] && $arr_check[0]['this is interesting']>$arr_check[0]['this is boring'] && $arr_check[0]['this is interesting']>$arr_check[0]['im saturated'] && $arr_check[0]['this is interesting']>$arr_check[0]['im lovin it'] && $arr_check[0]['this is interesting']>$arr_check[0]['i need a chai break'] && $arr_check[0]['this is interesting']>$arr_check[0]['lost the track'] && $arr_check[0]['this is interesting']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['this is interesting']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['this is interesting'] * 0.4);echo "%";
if($arr_check[0]['im saturated']>$arr_check[0]['need to know more...'] && $arr_check[0]['im saturated']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['im saturated']>$arr_check[0]['please slow down'] && $arr_check[0]['im saturated']>$arr_check[0]['this is boring'] && $arr_check[0]['im saturated']>$arr_check[0]['this is interesting'] && $arr_check[0]['im saturated']>$arr_check[0]['im lovin it'] && $arr_check[0]['im saturated']>$arr_check[0]['i need a chai break'] && $arr_check[0]['im saturated']>$arr_check[0]['lost the track'] && $arr_check[0]['im saturated']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['im saturated']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['im saturated'] * 0.4);echo "%";
if($arr_check[0]['im lovin it']>$arr_check[0]['need to know more...'] && $arr_check[0]['im lovin it']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['im lovin it']>$arr_check[0]['please slow down'] && $arr_check[0]['im lovin it']>$arr_check[0]['this is interesting'] && $arr_check[0]['im lovin it']>$arr_check[0]['this is boring'] && $arr_check[0]['im lovin it']>$arr_check[0]['this is informative'] && $arr_check[0]['im lovin it']>$arr_check[0]['i need a chai break'] && $arr_check[0]['im lovin it']>$arr_check[0]['lost the track'] && $arr_check[0]['im lovin it']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['im lovin it']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['im lovin it'] * 0.4);echo "%";
if($arr_check[0]['i need a chai break']>$arr_check[0]['need to know more...'] && $arr_check[0]['i need a chai break']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['i need a chai break']>$arr_check[0]['please slow down'] && $arr_check[0]['i need a chai break']>$arr_check[0]['this is interesting'] && $arr_check[0]['i need a chai break']>$arr_check[0]['im saturated'] && $arr_check[0]['i need a chai break']>$arr_check[0]['im lovin it'] && $arr_check[0]['i need a chai break']>$arr_check[0]['this is boring'] && $arr_check[0]['i need a chai break']>$arr_check[0]['lost the track'] && $arr_check[0]['i need a chai break']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['i need a chai break']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['i need a chai break'] * 0.4);echo "%";
if($arr_check[0]['lost the track']>$arr_check[0]['need to know more...'] && $arr_check[0]['lost the track']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['lost the track']>$arr_check[0]['please slow down'] && $arr_check[0]['lost the track']>$arr_check[0]['this is interesting'] && $arr_check[0]['lost the track']>$arr_check[0]['im saturated'] && $arr_check[0]['lost the track']>$arr_check[0]['im lovin it'] && $arr_check[0]['lost the track']>$arr_check[0]['i need a chai break'] && $arr_check[0]['lost the track']>$arr_check[0]['this is boring'] && $arr_check[0]['lost the track']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['lost the track']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['lost the track'] * 0.4);echo "%";
if($arr_check[0]['this is informative']>$arr_check[0]['need to know more...'] && $arr_check[0]['this is informative']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['this is informative']>$arr_check[0]['please slow down'] && $arr_check[0]['this is informative']>$arr_check[0]['this is interesting'] && $arr_check[0]['this is informative']>$arr_check[0]['im saturated'] && $arr_check[0]['this is informative']>$arr_check[0]['im lovin it'] && $arr_check[0]['this is informative']>$arr_check[0]['i need a chai break'] && $arr_check[0]['this is informative']>$arr_check[0]['lost the track'] && $arr_check[0]['this is informative']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['this is informative']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['this is informative'] * 0.4);echo "%";
if($arr_check[0]['best thing in the WORLD']>$arr_check[0]['need to know more...'] && $arr_check[0]['best thing in the WORLD']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['best thing in the WORLD']>$arr_check[0]['please slow down'] && $arr_check[0]['best thing in the WORLD']>$arr_check[0]['this is interesting'] && $arr_check[0]['best thing in the WORLD']>$arr_check[0]['im saturated'] && $arr_check[0]['best thing in the WORLD']>$arr_check[0]['im lovin it'] && $arr_check[0]['best thing in the WORLD']>$arr_check[0]['i need a chai break'] && $arr_check[0]['best thing in the WORLD']>$arr_check[0]['lost the track'] && $arr_check[0]['best thing in the WORLD']>$arr_check[0]['this is boring'] && $arr_check[0]['best thing in the WORLD']>$arr_check[0]['why am i here???'])
        echo ($arr_check[0]['best thing in the WORLD'] * 0.4);echo "%";
if($arr_check[0]['why am i here???']>$arr_check[0]['need to know more...'] && $arr_check[0]['why am i here???']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['why am i here???']>$arr_check[0]['please slow down'] && $arr_check[0]['why am i here???']>$arr_check[0]['this is interesting'] && $arr_check[0]['why am i here???']>$arr_check[0]['im saturated'] && $arr_check[0]['why am i here???']>$arr_check[0]['im lovin it'] && $arr_check[0]['why am i here???']>$arr_check[0]['i need a chai break'] && $arr_check[0]['why am i here???']>$arr_check[0]['lost the track'] && $arr_check[0]['why am i here???']>$arr_check[0]['best thing in the WORLD'] && $arr_check[0]['why am i here???']>$arr_check[0]['this is boring'])
        echo ($arr_check[0]['why am i here???'] * 0.4);echo "%";

?>
    
  </body>
</html>
