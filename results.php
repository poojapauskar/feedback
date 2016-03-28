<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Results</title>
    <link rel="stylesheet" href="results.css">
    </head>

  <body onload="zoom()">

 <script type="text/javascript">
  /*setTimeout(function(){
   window.location.reload(1);
}, 1000);*/


function zoom(){
     $('#percent').addClass('zoom');
}
  
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
    This is boring...
    <div class="progress-track">
    
      <div class="progress-fill" id="boring">
        <span><?php echo ($arr_check[0]['this is boring']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
  Need to know more...
    <div class="progress-track">
      
      <div class="progress-fill" id="know">
        <span><?php echo ($arr_check[0]['need to know more...']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
   I feel sleepy...
    <div class="progress-track">
     
      <div class="progress-fill" id="sleepy">
        <span><?php echo ($arr_check[0]['i feel sleepy']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
     Please slow down...
    <div class="progress-track">
   
      <div class="progress-fill" id="slow">
        <span><?php echo ($arr_check[0]['please slow down']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
   This is interesting...
    <div class="progress-track">
     
      <div class="progress-fill" id="interest">
        <span><?php echo ($arr_check[0]['this is interesting']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
  I'm saturated...
    <div class="progress-track">
      
      <div class="progress-fill" id="saturate">
        <span><?php echo ($arr_check[0]['im saturated']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>


  <div class="progress-bar horizontal">
    I'm lovin it...
    <div class="progress-track">
    
      <div class="progress-fill" id="lovin">
        <span><?php echo ($arr_check[0]['im lovin it']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
      Need a chai break...
    <div class="progress-track">
  
      <div class="progress-fill" id="chai">
        <span><?php echo ($arr_check[0]['i need a chai break']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
   Lost the track...
    <div class="progress-track">
     
      <div class="progress-fill" id="track">
        <span><?php echo ($arr_check[0]['lost the track']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>
  <div class="progress-bar horizontal">
    This is informative...
    <div class="progress-track">
    
      <div class="progress-fill" id="info">
        <span><?php echo ($arr_check[0]['this is informative']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
   Best thing in the WORLD...
    <div class="progress-track">
     
      <div class="progress-fill" id="world">
        <span><?php echo ($arr_check[0]['best thing in the world']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>

  <div class="progress-bar horizontal">
  Why am i here???
    <div class="progress-track">
      
      <div class="progress-fill" id="why">
        <span><?php echo ($arr_check[0]['why am i here???']*0.4);echo '%'; ?></span>
      </div>
    </div>
  </div>
</div>

<!-- Horizontal, flat -->


<!--   http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js -->
<script src='jquery1.js'></script>
        <script src="js/index.js"></script>


<?php

$image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151474/waiting_tdkodi.gif";

if($arr_check[0]['this is boring']>$arr_check[0]['need to know more...'] && $arr_check[0]['this is boring']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['this is boring']>$arr_check[0]['please slow down'] && $arr_check[0]['this is boring']>$arr_check[0]['this is interesting'] && $arr_check[0]['this is boring']>$arr_check[0]['im saturated'] && $arr_check[0]['this is boring']>$arr_check[0]['im lovin it'] && $arr_check[0]['this is boring']>$arr_check[0]['i need a chai break'] && $arr_check[0]['this is boring']>$arr_check[0]['lost the track'] && $arr_check[0]['this is boring']>$arr_check[0]['this is informative'] && $arr_check[0]['this is boring']>$arr_check[0]['best thing in the world'] && $arr_check[0]['this is boring']>$arr_check[0]['why am i here???']){
        $message="THIS IS BORING";
        $percent=$arr_check[0]['this is boring'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151475/boring_jqtqsn.gif";
}
if($arr_check[0]['need to know more...']>$arr_check[0]['this is boring'] && $arr_check[0]['need to know more...']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['need to know more...']>$arr_check[0]['please slow down'] && $arr_check[0]['need to know more...']>$arr_check[0]['this is interesting'] && $arr_check[0]['need to know more...']>$arr_check[0]['im saturated'] && $arr_check[0]['need to know more...']>$arr_check[0]['im lovin it'] && $arr_check[0]['need to know more...']>$arr_check[0]['i need a chai break'] && $arr_check[0]['need to know more...']>$arr_check[0]['lost the track'] && $arr_check[0]['need to know more...']>$arr_check[0]['this is informative'] && $arr_check[0]['need to know more...']>$arr_check[0]['best thing in the world'] && $arr_check[0]['need to know more...']>$arr_check[0]['why am i here???']){
        $message="NEED TO KNOW MORE..."; 
        $percent=$arr_check[0]['need to know more...'] * 0.4;
        $sign="%";      
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151472/know_v8b6vq.gif";
}
if($arr_check[0]['i feel sleepy']>$arr_check[0]['need to know more...'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['this is boring'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['please slow down'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['this is interesting'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['im saturated'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['im lovin it'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['i need a chai break'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['lost the track'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['best thing in the world'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['why am i here???'] && $arr_check[0]['i feel sleepy']>$arr_check[0]['this is informative']){
        $message="I FEEL SLEEPY";
        $percent=$arr_check[0]['i feel sleepy'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151473/sleepy_ykjeso.gif";
}
if($arr_check[0]['please slow down']>$arr_check[0]['this is informative'] && $arr_check[0]['please slow down']>$arr_check[0]['need to know more...'] && $arr_check[0]['please slow down']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['please slow down']>$arr_check[0]['this is boring'] && $arr_check[0]['please slow down']>$arr_check[0]['this is interesting'] && $arr_check[0]['please slow down']>$arr_check[0]['im saturated'] && $arr_check[0]['please slow down']>$arr_check[0]['im lovin it'] && $arr_check[0]['please slow down']>$arr_check[0]['i need a chai break'] && $arr_check[0]['please slow down']>$arr_check[0]['lost the track'] && $arr_check[0]['please slow down']>$arr_check[0]['best thing in the world'] && $arr_check[0]['please slow down']>$arr_check[0]['why am i here???']){
        $message="PLEASE SLOW DOWN";
        $percent=$arr_check[0]['please slow down'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151473/slow_xurg6y.gif";
}
if($arr_check[0]['this is interesting']>$arr_check[0]['need to know more...'] && $arr_check[0]['this is interesting']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['this is interesting']>$arr_check[0]['please slow down'] && $arr_check[0]['this is interesting']>$arr_check[0]['this is boring'] && $arr_check[0]['this is interesting']>$arr_check[0]['im saturated'] && $arr_check[0]['this is interesting']>$arr_check[0]['im lovin it'] && $arr_check[0]['this is interesting']>$arr_check[0]['i need a chai break'] && $arr_check[0]['this is interesting']>$arr_check[0]['lost the track'] && $arr_check[0]['this is interesting']>$arr_check[0]['best thing in the world'] && $arr_check[0]['this is interesting']>$arr_check[0]['why am i here???'] && $arr_check[0]['this is interesting']>$arr_check[0]['this is informative']){
        $message="THIS IS INTERESTING";
        $percent=$arr_check[0]['this is interesting'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151472/interesting_ew0zna.gif";
}
if($arr_check[0]['im saturated']>$arr_check[0]['this is informative'] && $arr_check[0]['im saturated']>$arr_check[0]['need to know more...'] && $arr_check[0]['im saturated']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['im saturated']>$arr_check[0]['please slow down'] && $arr_check[0]['im saturated']>$arr_check[0]['this is boring'] && $arr_check[0]['im saturated']>$arr_check[0]['this is interesting'] && $arr_check[0]['im saturated']>$arr_check[0]['im lovin it'] && $arr_check[0]['im saturated']>$arr_check[0]['i need a chai break'] && $arr_check[0]['im saturated']>$arr_check[0]['lost the track'] && $arr_check[0]['im saturated']>$arr_check[0]['best thing in the world'] && $arr_check[0]['im saturated']>$arr_check[0]['why am i here???']){
        $message="I'M SATURATED";
        $percent=$arr_check[0]['im saturated'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151475/saturated_wb03ij.gif";
}
if($arr_check[0]['im lovin it']>$arr_check[0]['this is informative'] && $arr_check[0]['im lovin it']>$arr_check[0]['need to know more...'] && $arr_check[0]['im lovin it']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['im lovin it']>$arr_check[0]['please slow down'] && $arr_check[0]['im lovin it']>$arr_check[0]['this is interesting'] && $arr_check[0]['im lovin it']>$arr_check[0]['this is boring'] && $arr_check[0]['im lovin it']>$arr_check[0]['this is informative'] && $arr_check[0]['im lovin it']>$arr_check[0]['i need a chai break'] && $arr_check[0]['im lovin it']>$arr_check[0]['lost the track'] && $arr_check[0]['im lovin it']>$arr_check[0]['best thing in the world'] && $arr_check[0]['im lovin it']>$arr_check[0]['why am i here???']){
        $message="I'M LOVIN IT";
        $percent=$arr_check[0]['im lovin it'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151476/loving_chefp0.gif";
}
if($arr_check[0]['i need a chai break']>$arr_check[0]['this is informative'] && $arr_check[0]['i need a chai break']>$arr_check[0]['need to know more...'] && $arr_check[0]['i need a chai break']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['i need a chai break']>$arr_check[0]['please slow down'] && $arr_check[0]['i need a chai break']>$arr_check[0]['this is interesting'] && $arr_check[0]['i need a chai break']>$arr_check[0]['im saturated'] && $arr_check[0]['i need a chai break']>$arr_check[0]['im lovin it'] && $arr_check[0]['i need a chai break']>$arr_check[0]['this is boring'] && $arr_check[0]['i need a chai break']>$arr_check[0]['lost the track'] && $arr_check[0]['i need a chai break']>$arr_check[0]['best thing in the world'] && $arr_check[0]['i need a chai break']>$arr_check[0]['why am i here???']){
        $message="I NEED A CHAI BREAK";
        $percent=$arr_check[0]['i need a chai break'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151472/chai_ivesvt.gif";
}
if($arr_check[0]['lost the track']>$arr_check[0]['need to know more...'] && $arr_check[0]['lost the track']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['lost the track']>$arr_check[0]['please slow down'] && $arr_check[0]['lost the track']>$arr_check[0]['this is interesting'] && $arr_check[0]['lost the track']>$arr_check[0]['im saturated'] && $arr_check[0]['lost the track']>$arr_check[0]['im lovin it'] && $arr_check[0]['lost the track']>$arr_check[0]['i need a chai break'] && $arr_check[0]['lost the track']>$arr_check[0]['this is boring'] && $arr_check[0]['lost the track']>$arr_check[0]['best thing in the world'] && $arr_check[0]['lost the track']>$arr_check[0]['why am i here???'] && $arr_check[0]['lost the track']>$arr_check[0]['this is informative']){
        $message="LOST THE TRACK";
        $percent=$arr_check[0]['lost the track'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151476/lost_m4iezy.gif";
}
if($arr_check[0]['this is informative']>$arr_check[0]['this is boring'] && $arr_check[0]['this is informative']>$arr_check[0]['need to know more...'] && $arr_check[0]['this is informative']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['this is informative']>$arr_check[0]['please slow down'] && $arr_check[0]['this is informative']>$arr_check[0]['this is interesting'] && $arr_check[0]['this is informative']>$arr_check[0]['im saturated'] && $arr_check[0]['this is informative']>$arr_check[0]['im lovin it'] && $arr_check[0]['this is informative']>$arr_check[0]['i need a chai break'] && $arr_check[0]['this is informative']>$arr_check[0]['lost the track'] && $arr_check[0]['this is informative']>$arr_check[0]['best thing in the world'] && $arr_check[0]['this is informative']>$arr_check[0]['why am i here???']){
        $message="THIS IS INFORMATIVE";
        $percent=$arr_check[0]['this is informative'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151471/informative_hzqvo7.gif";
}
if($arr_check[0]['best thing in the world']>$arr_check[0]['this is informative'] && $arr_check[0]['best thing in the world']>$arr_check[0]['need to know more...'] && $arr_check[0]['best thing in the world']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['best thing in the world']>$arr_check[0]['please slow down'] && $arr_check[0]['best thing in the world']>$arr_check[0]['this is interesting'] && $arr_check[0]['best thing in the world']>$arr_check[0]['im saturated'] && $arr_check[0]['best thing in the world']>$arr_check[0]['im lovin it'] && $arr_check[0]['best thing in the world']>$arr_check[0]['i need a chai break'] && $arr_check[0]['best thing in the world']>$arr_check[0]['lost the track'] && $arr_check[0]['best thing in the world']>$arr_check[0]['this is boring'] && $arr_check[0]['best thing in the world']>$arr_check[0]['why am i here???']){
        $message="BEST THING IN THE WORLD";
        $percent=$arr_check[0]['best thing in the world'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151473/best_uair0k.gif";
}
if($arr_check[0]['why am i here???']>$arr_check[0]['this is informative'] && $arr_check[0]['why am i here???']>$arr_check[0]['need to know more...'] && $arr_check[0]['why am i here???']>$arr_check[0]['i feel sleepy'] && $arr_check[0]['why am i here???']>$arr_check[0]['please slow down'] && $arr_check[0]['why am i here???']>$arr_check[0]['this is interesting'] && $arr_check[0]['why am i here???']>$arr_check[0]['im saturated'] && $arr_check[0]['why am i here???']>$arr_check[0]['im lovin it'] && $arr_check[0]['why am i here???']>$arr_check[0]['i need a chai break'] && $arr_check[0]['why am i here???']>$arr_check[0]['lost the track'] && $arr_check[0]['why am i here???']>$arr_check[0]['best thing in the world'] && $arr_check[0]['why am i here???']>$arr_check[0]['this is boring']){
        $message="WHY AM I HERE";
        $percent=$arr_check[0]['why am i here???'] * 0.4;
        $sign="%";
        $image="http://res.cloudinary.com/hdfr7rvfk/image/upload/v1459151475/why_jj5irm.gif";
}

?>





<h4 id="message"><?php echo $message;?></h4>
<h5 id="percent"><?php echo $percent;echo $sign;?></h5>
<img style="margin-top:-6%" src="<?php echo $image;?>">


    
  </body>
</html>
