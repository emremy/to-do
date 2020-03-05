var OptionTasks = document.querySelector(".globalTasksList");
var SearchParse = location.search.substring(1).split("=")[1];


OptionTasks.addEventListener("change",function(){
    var ChangeID = OptionTasks.options[OptionTasks.selectedIndex].value;
    if(ChangeID != ''){
        location.href = "/tasks?_taskId="+ChangeID;
    }
});