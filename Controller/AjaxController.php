<?php 
require _models.'AjaxModels.php';

if(!empty($_GET['_title'])){
    $TitleText = trim($_GET['_title']);
    $RandomValue = $AjaxModels->RandomKey('taskstitle');
    $Result = $AjaxModels->AddTaskTitle($TitleText,$RandomValue);
    if($Result){
        http_response_code(200);
    }else{
        http_response_code(204);
    }
}else if(!empty($_GET['_deleteTitle'])){
    $TitleID = trim($_GET['_deleteTitle']);
    $Result = $AjaxModels->DeleteTask($TitleID);
    if($Result){
        http_response_code(200);
    }else{
        http_response_code(204);
    }
}else if(!empty($_GET['_taskDescription']) && !empty($_GET['_titleId'])){
    $TaskDescription = trim($_GET['_taskDescription']);
    $TitleId = trim($_GET['_titleId']);
    $Result = $AjaxModels->AddTaskDetail($TitleId,$TaskDescription);
    if($Result){
        http_response_code(200);
    }else{
        http_response_code(204);
    }
}else if(!empty($_GET['_PublicValue'])){
    $PubliceValue = trim($_GET['_PublicValue']);
    $Result = $AjaxModels->DeleteSingleTask($PubliceValue);
    if($Result){
        http_response_code(200);
    }else{
        http_response_code(204);
    }
}else if(!empty($_GET['_ConfirmPublicValue'])){
    $PubliceValue = trim($_GET['_ConfirmPublicValue']);
    $Result = $AjaxModels->UpdateConfirmValue($PubliceValue);
    if($Result){
        http_response_code(200);
    }else{
        http_response_code(204);
    }
}
?>