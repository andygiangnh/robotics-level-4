<!--
Project: Earthrover
Author: Jitesh Saini
Github: https://github.com/jiteshsaini
website: https://helloworld.co.in
-->
<html>
<head>        
   <title>Remote</title>  
   <link href="css/remote.css" rel="stylesheet" type="text/css">  
   <script src="js/jquery.min.js"></script>  
   <script src="js/remote.js"></script>  
             
</head> 

<body>
<?php
include_once '../vars.php';

gpio_initialise(); // initialising the GPIO pins

?>
<div align="center" id='box_outer'>
	<!-- =================Direction Buttons=================================================== -->
	<div class='box_row'>
		<input  class="button"  type="submit" onclick="button_direction('F');" value="TIẾN"/>
	</div>
	<br />
	<div class='box_row'>
		<input class="button" style="float:left" type="submit" onclick="button_direction('L');" value="TRÁI"/>
		<input class="button" type="submit" onclick="button_direction('S');" value="DỪNG"/>
		<input  class="button" style="float:right" type="submit" onclick="button_direction('R');" value="PHẢI"/>
	</div>
	<br />
	<div class='box_row'>
			<input  class="button" type="submit" onclick="button_direction('B');" value="LÙI"/>
	</div>
	<!-- ================================================================================= -->
	
	<br><br>
	
	<!-- =============Range Slider for speed==============================================-->
	<div class='box_row'>
	
		<div class="slidecontainer">
			<input type="range" min="0" max="100" value="50" class="slider" id="myRange" step="5">
			<p>Speed: <span id="speed">50</span></p>
		</div>
		<script>
			var slider = document.getElementById("myRange");
			var output = document.getElementById("speed");
			output.innerHTML = slider.value;
			speed_slider(slider.value);
			slider.oninput = function() {
				output.innerHTML = this.value;
				speed_slider(this.value);
				}
		</script>
	</div>
	<!-- ================================================================================== -->
	<div>
		<input id='radio1' type='radio' name='web_control' value='control_on' onclick="trigger_web_control('ON');"> Bật 
		<input type='radio' name='web_control' value='control_off' onclick="trigger_web_control('OFF');"> Tắt <br/>
	</div>
</div>

</body>
</html>
