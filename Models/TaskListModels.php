<?php 
require _core.'Db.core.php';
class TaskList{
    public $Db;
    public $AllFunctions;
    function __construct(){
        $this->Db = new Connected();
        $this->AllFunctions = new AllFunctions();
    }

    function GetTitle($TitleId){
        $Data = $this->Db->GetData('SELECT taskTitle FROM todolist.taskstitle WHERE publicID=:PublicID',['PublicID'=>$TitleId]);
        return $Data;
    }

    function GetAllTask($TitleId){
        $Data = $this->Db->GetData('SELECT publicID,taskDescription,confirmTask FROM todolist.taskdetail WHERE taskTitleID=:TitleID',['TitleID'=>$TitleId]);
        return $Data;
    }

    function GetAllTasks(){
        $Data = $this->Db->GetData('SELECT publicID,taskTitle FROM todolist.taskstitle');
        return $Data;
    }
}

$TaskListModels = new TaskList();
?>