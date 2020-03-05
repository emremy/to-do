
function myTime(){
    var TimeClass = document.querySelector(".myTime");
    var Now = new Date();
    
    TimeClass.innerHTML = "<strong>" + Now.toLocaleDateString() + "</strong>" + " • " + Now.toLocaleTimeString();
}


setInterval("myTime()",1000);





