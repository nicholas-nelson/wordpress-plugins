<?php
   /*
   Plugin Name: Ohm's Law
   Plugin URI: http://career.nickanelson.com
   Description: Ohm's Law Calculator.
   Version: 0.0
   Author: Nick Nelson
   Author URI: http://career.nickanelson.com
   License: GPL2
   */

function form_ohms(){

$resistance  = isset($_POST['resistance']) ? $_POST['resistance'] : '';
$current    = isset($_POST['current']) ? $_POST['current'] : '';
$volt    = isset($_POST['volts']) ? $_POST['volts'] : '';


if ($volt && $resistance && $current != chr(48)){
    $answer = $volt / $resistance . " Amps";
}

elseif ($volt && $current && $resistance != chr(48)){
    $answer = $volt / $current . " Ohms";
}

elseif ($current && $resistance && $volt != chr(48)){
    $answer = $current * $resistance . " Volts";
}

/*elseif (($volt == 0) && $resistance){
    $answer = "You cannot use 0 volts as a value.";
}

elseif (($volt == 0) && $current){
    $answer = "You cannot use 0 volts as a value.";
}*/

else
{
    $answer = "Please enter 2 numeric values only.";
}  
?>
<div class="main">
<p>OHM'S LAW</p>
</div>

<div>
<p>
Ohm's Law consists of three values: Current, Voltage, and Resistance. The Ohm's Triangle is the following formula: Voltage = Current x Resistance. We can rearrange this formula to find any of the variables as long as we have to values to enter. This is the first formula that anyone in the electrical field must learn and understand. Below, I created a calculator for you to try out.
</p>
</div>

<div>
<p class="text2">
Your answer is: <font color="red"><?php echo $answer; ?></font> 
</p>
</div>
 
<div class="form">

	<form action="http://technology.nickanelson.com/ohms/" method="post">
	
		<b><font color="red">*</font>Voltage:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> <input type="text" onpaste="return false;" id='voltage' name="volts" onkeypress="return isNumberKey(event,this)" onkeyup='validateV()'/><br>
		<span class='error-message' id='voltage-error'></span>
		<br><br>
		<b><font color="red">*</font>Resistance:</b> <input type="text" onpaste="return false;" id='resistance' name="resistance" onkeypress="return isNumberKey(event,this)" onkeyup='validateR()'/><br>
		<span class='error-message' id='resistance-error'></span>
		<br><br>
		<b><font color="red">*</font>Current:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> <input type="text" onpaste="return false;" id='current' name="current" onkeypress="return isNumberKey(event,this)" onkeyup='validateC()'/><br>
		<span class='error-message' id='current-error'></span>
		<br><br>
		<button onclick='return validateForm()' class="btn btn-default">CALCULATE</button>
        <span class='error-message' id='submit-error'></span>
		
	</form>
	
</div>
<?php
}
add_shortcode('ohms', 'form_ohms');
?>