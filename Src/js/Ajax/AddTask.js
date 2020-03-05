// Created By Valunth

var ButtonTask = document.querySelector('.add-button-task');

ButtonTask.addEventListener('click',function(){
    var TaskText = document.getElementById('text-task-textarea').value;
    var TitleId = document.querySelector('#_MainTitle').value;
    if(TaskText != ''){
        var XHTTPHtml = new XMLHttpRequest();
        XHTTPHtml.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    window.location.reload(false);
            }
        };
        XHTTPHtml.open("GET",`AddTask?_taskDescription=${TaskText}&_titleId=${TitleId}`,true);
        XHTTPHtml.send(null);
    }
});

console.log("Created By Valunth");
