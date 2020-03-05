// Created By Valunth
var ButtonTaskTitle = document.querySelector('.add-button-main-task-title');

ButtonTaskTitle.addEventListener('click',function(){
    var TitleText = document.querySelector('#input-task-title').value;
    if(TitleText != null){
        var XHTTPHtml = new XMLHttpRequest();
        XHTTPHtml.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    window.location.reload(false);
            }
        };
        XHTTPHtml.open("GET",`AddMainTask?_title=${TitleText}`,true);
        XHTTPHtml.send(null);
    }
});
console.log("Created By Valunth");