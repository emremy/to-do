// Created By Valunth

var PanelTaskButton = document.querySelector('#Add-Main-Task');
var PanelTask = document.querySelector('#add-task');
var ClosePanelTask = document.querySelector('#close-task-panel');

PanelTaskButton.addEventListener('click',function(){
    PanelTask.style.display = 'flex';
});

ClosePanelTask.addEventListener('click',function(){
    PanelTask.style.display = 'none';
});

console.log("Created By Valunth");

