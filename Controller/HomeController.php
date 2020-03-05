<?php
require _models.'HomeModels.php';

$ResultData['title'] = 'Ana Görev Başlığı';
$ResultData['JsFile'] = ['OMainTaskTitlePanel.js','ODMainTask.js'];
$ResultData['Ajax'] = ['AddMainTask.js','DeleteMainTask.js'];

$ResultData['tasksData'] = $HomeModels->GetAllTask();

?>