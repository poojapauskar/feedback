
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

/*if (!isset($_COOKIE['FormSubmitted']))
{
    setcookie('FormSubmitted', '0');
}
if ($_COOKIE['FormSubmitted'] == 0)
{
    setcookie('FormSubmitted', '1');
}
if ($_COOKIE['FormSubmitted'] == 1)
{
    setcookie('FormSubmitted', '2');
} 
if ($_COOKIE['FormSubmitted'] == 2)
{
    setcookie('FormSubmitted', '3');
} 
if ($_COOKIE['FormSubmitted'] == 3)
{
    setcookie('FormSubmitted', '4');
}
if ($_COOKIE['FormSubmitted'] == 4)
{
    setcookie('FormSubmitted', '5');
}  
if ($_COOKIE['FormSubmitted'] == 5)
{
    die('Thank you for your feedback!');
} */

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
    $message="Thank You for your feedback!";
    
}?>




<div id="loadingPleaseWait"><h6>Loading, please wait...</h6></div>

<h5><?php echo $message; ?><h5>

  
<h4>Feedback Form</h4>

<form action="" method="post" id="myform" name="form1">
   <input type="hidden" value="1" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn1" class="btn btn-md round">this is boring</button>
</form>

<form action="" method="post" id="myform" name="form2">
   <input type="hidden" value="2" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn2" class="btn btn-md round">need to know more...</button>
</form>

<form action="" method="post" id="myform" name="form3">
   <input type="hidden" value="3" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn3" class="btn btn-md round">i feel sleepy</button>
</form>

<form action="" method="post" id="myform" name="form4">
   <input type="hidden" value="4" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn4" class="btn btn-md round">please slow down</button>
</form>

<form action="" method="post" id="myform" name="form5">
   <input type="hidden" value="5" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn5" class="btn btn-md round">this is interesting</button>
</form>

<form action="" method="post" id="myform" name="form6">
   <input type="hidden" value="6" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn6" class="btn btn-md round">i'm saturated</button>
</form>

<form action="" method="post" id="myform" name="form7">
   <input type="hidden" value="7" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn7" class="btn btn-md round">i'm lovin it</button>
</form>

<form action="" method="post" id="myform" name="form8">
   <input type="hidden" value="8" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn8" class="btn btn-md round">i need a chai break</button>
</form>

<form action="" method="post" id="myform" name="form9">
   <input type="hidden" value="9" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn9" class="btn btn-md round">lost the track</button>
</form>

<form action="" method="post" id="myform" name="form10">
   <input type="hidden" value="10" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn10" class="btn btn-md round">this is informative</button>
</form>

<form action="" method="post" id="myform" name="form11">
   <input type="hidden" value="11" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn11" class="btn btn-md round">best thing in the WORLD</button>
</form>

<form action="" method="post" id="myform" name="form12">
   <input type="hidden" value="12" name="feedback"></input>
   <button onclick="show_wait_msg()" type="submit" id="btn12" class="btn btn-md round">why am i here???</button>
</form>




</body>
</html>