// JavaScript Document
var time = 0;
var running = 0;

function startPause(){
	if(running == 0){
		running = 1;
		increment();
		document.getElementById("startPause").innerHTML = "<i class='glyphicon glyphicon-pause'></i> Pause";
	}else{
		running = 0;
		document.getElementById("startPause").innerHTML = "<i class='glyphicon glyphicon-repeat'></i> Resume";
		}
}

function reset(){
	running = 0;
	time = 0;
	document.getElementById("startPause").innerHTML = "Start";
	document.getElementById("stopWatchDisplay").innerHTML = "00:00:00";
}

function increment(){
	
		setTimeout(function(){
			time++;
			var mins = Math.floor(time/10/60)%60;
			var secs = Math.floor(time/10)%60;
			var tenths = time%10;
			
			if(mins<10){
				mins = "0" + mins;
			}
			if(secs<10){
				secs = "0" + secs;
			}
			document.getElementById("stopWatchDisplay").innerHTML = mins+ ":" +secs+ ":" + "0" +tenths;
			increment();
		},100);
	
}