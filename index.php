
<html>
<head>
<link rel="stylesheet" type="text/css" href="feedback_form.css">
</head>
<script type="text/javascript">

function hide_wait_msg ()
{
    document.getElementById('loadingPleaseWait').style.display = 'none';
}

function show_wait_msg ()
{
     document.getElementById('loadingPleaseWait').style.display = 'block';
}


</script>
<body onload="hide_wait_msg()">


<?php 

/*echo $_POST['feedback'];*/

if($_POST['feedback'] != ''){
    $url = 'https://feedback-list.herokuapp.com/set_feedback/';
    $data = array('value' => $_POST['feedback']);
    // use key 'http' even if you send the request to https://...
    $options = array(
      'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
      ),
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    /*echo $result8;*/
    $arr = json_decode($result,true);
    $message="Thank You for your feedback";
    
}?>




<div id="loadingPleaseWait"><div>Loading, please wait...</div></div>

<h5><?php echo $message; ?><h5>

  
<h4>Feedback Form</h4>

<form action="" method="post" id="myform" name="form1">
   <input type="hidden" value="0" name="feedback"></input>
   <button onclick="show_wait_msg()" class="btn1" id="btn" type="submit">Bad</button>
</form>

<form action="" method="post" id="myform" name="form2">
   <input type="hidden" value="1" name="feedback"></input>
   <button onclick="show_wait_msg()" class="btn2" id="btn" type="submit">Good</button>
</form>




</body>
</html>