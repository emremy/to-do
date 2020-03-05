// Created By Valunth

var DeletePanelButton = document.querySelector('#Delete-Main-Task');
var CloseDeletePanel = document.querySelector('#close-delete-task-panel');
var DeletePanel = document.querySelector('#delete-task');

DeletePanelButton.addEventListener('click',function(){
    DeletePanel.style.display = 'flex';
});

CloseDeletePanel.addEventListener('click',function(){
    DeletePanel.style.display = 'none';
});

console.log("Created By Valunth");