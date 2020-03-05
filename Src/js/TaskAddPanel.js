// Created By Valunth

var BigPanel = document.querySelectorAll('.add-big-panel');
var OBigPanel = document.querySelector('.task-detail-add');
var CBigPanel = document.querySelector('.close-big-panel');

OBigPanel.addEventListener('click',function(){
    BigPanel.forEach(element => {
        element.style.display = 'flex';
    });
});

CBigPanel.addEventListener('click',function(){
    BigPanel.forEach(element => {
        element.style.display = 'none';
    });
})

console.log("Created By Valunth");