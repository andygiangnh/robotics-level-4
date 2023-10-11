$(document).keydown(function(e){
    if (e.keyCode == 37)  
    	 button_direction('L');
    if (e.keyCode == 38) 
        button_direction('F');
    if (e.keyCode == 39) 
    	  button_direction('R');
    if (e.keyCode == 40)
    	 button_direction('B');
    if (e.keyCode == 32)
    	 button_direction('S');
});

//---------DIRECTION---------------------------------
function button_direction(val)
{
	console.log("button val:" + val);
	// $.post("ajax_direction.php",
  $.post("move_serial.php",
    {
      direction: val
    }
    );
}

//---------SPEED--------------------------------------
function speed_slider(val)
{
	console.log("slider val:" + val);
	$.post("ajax_speed.php",
    {
      speed:val
    }
    );
}





