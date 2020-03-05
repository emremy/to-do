// Created By Valunth

var DeleteSingleTask = document.querySelectorAll('.delete-single-task');
DeleteSingleTask.forEach(e => {
    e.addEventListener('click',function(){
        var PublicValue = this.value;
        var XHTTPHtml = new XMLHttpRequest();
        XHTTPHtml.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    window.location.reload(false);
            }
        };
        XHTTPHtml.open("GET",`DeleteSingleTask?_PublicValue=${PublicValue}`,true);
        XHTTPHtml.send(null);
    });
});


var ConfirmSingleTask = document.querySelectorAll('.confirm-single-task');
ConfirmSingleTask.forEach(e => {
    e.addEventListener('click',function(){
        var ConfirmPublicValue = this.value;
        var XHTTPHtml = new XMLHttpRequest();
        XHTTPHtml.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    window.location.reload(false);
            }
        };
        XHTTPHtml.open("GET",`ConfirmTask?_ConfirmPublicValue=${ConfirmPublicValue}`,true);
        XHTTPHtml.send(null);
    });
});

console.log("Created By Valunth");