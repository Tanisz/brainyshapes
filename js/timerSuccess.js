var counter = setInterval(timer, 1000); //1000 will  run it every 1 second
var IsFunctionCalled = false;
function timer() {   
    var val = document.getElementById("LabelTimer");
    if (val != null) {
       
        var PopUpSecondDuration = 10; 
         if (IsFunctionCalled == false) {
            IsFunctionCalled = true 
            countdown(parseInt(PopUpSecondDuration));
        }
      
    }
}

function countdown(sec) {
    var seconds = sec;
    
    function tick() {
        var counterVal = document.getElementById("lblCountDown");
        
            var current_seq = seconds - 1;
            seconds--;
            counterVal.innerHTML =  current_seq.toString();
           
            var result = counterVal.innerHTML;
        
        

        if ((result == "0:00") || (result == "0")) {
            clearInterval(counter);
            loginredirect();
            CloseIdlePage(); 
        } 
        if (current_seq > 0) {
           setTimeout(tick, 1000);
          // tick()
        } 
    }
    tick();
}