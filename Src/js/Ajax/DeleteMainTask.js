// Created By Valunth

var DeleteButtonAjax = document.querySelector('.delete-main-task-title-button');

DeleteButtonAjax.addEventListener('click',function(){
    var OptionsList = document.getElementById('delete-task-lists');
    var TitleId = OptionsList.options[OptionsList.selectedIndex].value;
    if(TitleId != ''){
        var XHTTPHtml = new XMLHttpRequest();
        XHTTPHtml.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    window.location.reload(false);
            }
        };
        XHTTPHtml.open("GET",`DeleteMainTask?_deleteTitle=${TitleId}`,true);
        XHTTPHtml.send(null);
    }
});

console.log("Created By Valunth");