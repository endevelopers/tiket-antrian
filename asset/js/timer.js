// JavaScript Document



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