<?php 
require _models.'TaskListModels.php';

if(!empty($_GET['_taskId'])){
    $TaskId = trim($_GET['_taskId']);
    $ResultData['DataTitle'] = $TaskListModels->GetTitle($TaskId);
    $ResultData['title'] = $ResultData['DataTitle'][0]['taskTitle'];
    $ResultData['Data'] = $TaskListModels->GetAllTask($TaskId);
    $ResultData['JsFile'] = ['TaskAddPanel.js'];
    $ResultData['Ajax'] = ['AddTask.js','ConfirmOrDeleteTask.js'];
    $ResultData['MainTitleId'] = trim($_GET['_taskId']);
    $ResultData['tasksData'] = $TaskListModels->GetAllTasks();
};

?>