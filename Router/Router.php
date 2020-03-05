<?php 
require _routers.'Config.php';

function GetController($Controller){
    require _controller.$Controller.'Controller.php';
}

function GetTemplate($ViewsName,$ResultData){

    require _controller.$ViewsName[0]->Controller.'Controller.php';
    require _views.'Template/Header.php';
    require _views.$ViewsName[0]->FileName.'/'.$ViewsName[0]->IndexName.'.php';
    require _views.'Template/Footer.php';

}

function GetFile($Path){

    $Array = array();
    $MyObject = (object) array();
    $MyObject->Controller = $Path['Controller'];
    $MyObject->FileName = $Path['ViewsPath'];
    $MyObject->IndexName = $Path['ViewsFile'];
    array_push($Array,$MyObject);
    return $Array;

}


$ResultData = new ResultData();
if(!empty($MyRouter[$Router[0]]) && $MyRouter[$Router[0]] == 'Home'){
    $FilePath = GetFile(['Controller'=>$MyRouter[$Router[0]],'ViewsPath'=>'HomePage','ViewsFile'=>'index']);
    GetTemplate($FilePath,$ResultData->Result);
}else if(!empty($MyRouter[$Router[0]]) && $MyRouter[$Router[0]] == 'Ajax'){
    GetController($MyRouter[$Router[0]]);
}else if(!empty($MyRouter[$Router[0]]) && $MyRouter[$Router[0]] == 'TaskList'){
    
    $FilePath = GetFile(['Controller'=>$MyRouter[$Router[0]],'ViewsPath'=>'Tasks','ViewsFile'=>'index']);
    GetTemplate($FilePath,$ResultData->Result);
}else{
    echo "--404-!-404--";
}
?>