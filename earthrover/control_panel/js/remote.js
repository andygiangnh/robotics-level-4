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

// Trigger Web remote control
function trigger_web_control(val) {
    if(val == 'ON')
        $.get("http://192.168.1.15:5000/", crossDomain=true)
    else if(val == 'OFF')
    $.get("http://192.168.1.15:5000/close", crossDomain=true)
}

//---------DIRECTION---------------------------------
function button_direction(val)
{
	console.log("button val:" + val);
	$.get("http://192.168.1.15:5000/move/" + val, crossDomain=true)
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





