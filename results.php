<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Animated HTML/CSS/jQuery Skills Graph</title>
    
    
    
    <link rel='stylesheet prefetch' href='bootstrap1.css'>

        <link rel="stylesheet" href="results.css">

 
    
    
  </head>

  <body>
 <script type="text/javascript">
/*  setTimeout(function(){
   window.location.reload(1);
}, 1000);*/
</script>  

      <div id="resumeProficiencies">
    
       <div id="resumeProficienciesTop" class="resumeProficienciesTop1">this is boring</div><!--END resumeProficienciesTop-->

       <div id="resumeProficienciesBottom">
        <div class="progress">
          <div class="adobe progress-bar progress-bar-info" role="progressbar" style="width: 0%">
          </div>
        </div>
      </div><!--END resumeProficienciesBottom-->

      <div id="resumeProficienciesTop">need to know more...</div><!--END resumeProficienciesTop-->
     
     <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="html progress-bar progress-bar-info" role="progressbar" style="width: 0%">
        </div>
      </div>
     </div><!--END resumeProficienciesBottom-->   

     <div id="resumeProficienciesTop">i feel sleepy</div><!--END resumeProficienciesTop-->

     <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="css progress-bar progress-bar-info" role="progressbar" style="width: 0%">
        </div>
      </div>
    </div><!--END resumeProficienciesBottom-->   

    <div id="resumeProficienciesTop">please slow down</div><!-- END resumeProficienciesTop -->

    <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="jquery progress-bar progress-bar-info" role="progressbar" style="width: 0%"></div>
      </div>
    </div><!--END resumeProficienciesBottom-->

    <div id="resumeProficienciesTop">this is interesting</div><!--END resumeProficienciesTop-->

    <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="javascript progress-bar progress-bar-info" role="progressbar" style="width: 0%">
        </div>
      </div>
    </div><!--END resumeProficienciesBottom-->

    <div id="resumeProficienciesTop">i'm saturated</div><!--END resumeProficienciesTop-->

    <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="bootstrap progress-bar progress-bar-info" role="progressbar" style="width: 0%">
        </div>
      </div>
    </div><!--END resumeProficienciesBottom-->

    <div id="resumeProficienciesTop">i'm lovin it</div><!--END resumeProficienciesTop-->

    <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="wordpress progress-bar progress-bar-info" role="progressbar" style="width: 0%">
        </div>
      </div>
    </div><!--END resumeProficienciesBottom-->   

    <div id="resumeProficienciesTop">i need a chai break</div><!--END resumeProficienciesTop-->

    <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="ui progress-bar progress-bar-info" role="progressbar" style="width: 0%">
        </div>
      </div>
    </div><!-- ENDresumeProficienciesBottom-->   

    <div id="resumeProficienciesTop">lost the track</div><!--END resumeProficienciesTop-->

    <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="ux progress-bar progress-bar-info" role="progressbar" style="width: 0%">
        </div>
      </div>
    </div><!--END resumeProficienciesBottom-->   

    <div id="resumeProficienciesTop">this is informative</div><!--END resumeProficienciesTop-->

    <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="rwd progress-bar progress-bar-info" role="progressbar" style="width: 0%">
         <span class="sr-only"></span>
       </div>
     </div>
    </div><!--END resumeProficienciesBottom-->

    <div id="resumeProficienciesTop">best thing in the WORLD</div><!--END resumeProficienciesTop-->

    <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="mobile progress-bar progress-bar-info" role="progressbar" style="width: 0%">
         <span class="sr-only"></span>
       </div>
     </div>
    </div><!--END resumeProficienciesBottom-->

    <div id="resumeProficienciesTop">why am i here???</div><!--END resumeProficienciesTop-->

    <div id="resumeProficienciesBottom">
      <div class="progress">
        <div class="rapidproto progress-bar progress-bar-info" role="progressbar" style="width: 0%">
         <span class="sr-only"></span>
       </div>
     </div>
    </div><!--END resumeProficienciesBottom-->   
</div>
    <script src='jquery1.js'></script>
<script src='jquery2.js'></script>


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


<script type="text/javascript">
$(document).ready(function() {
  $('.adobe').css('width', "<?php echo $arr_check[0]['this is boring'];echo '%'; ?>");
  $('.html').css('width',"<?php echo $arr_check[0]['need to know more...'];echo '%'; ?>");
  $('.css').css('width', "<?php echo $arr_check[0]['i feel sleepy'];echo '%'; ?>");
  $('.lesssass').css('width', "<?php echo $arr_check[0]['please slow down'];echo '%'; ?>");
  $('.jquery').css('width', "<?php echo $arr_check[0]['this is interesting'];echo '%'; ?>");
  $('.javascript').css('width',"<?php echo $arr_check[0]['im saturated'];echo '%'; ?>");
  $('.bootstrap').css('width', "<?php echo $arr_check[0]['im lovin it'];echo '%'; ?>");
  $('.wordpress').css('width', "<?php echo $arr_check[0]['i need a chai break'];echo '%'; ?>");
  $('.ui').css('width', "<?php echo $arr_check[0]['lost the track'];echo '%'; ?>");
  $('.ux').css('width', "<?php echo $arr_check[0]['this is informative'];echo '%'; ?>");
  $('.rwd').css('width', "<?php echo $arr_check[0]['best thing in the WORLD'];echo '%'; ?>");
  $('.mobile').css('width', "<?php echo $arr_check[0]['why am i here???'];echo '%'; ?>");
});
</script>

    
    
    
  </body>
</html>
