<?php 
require _core.'Db.core.php';

class Home{
    private $Db;

    public function __construct(){
        $this->Db = new Connected();
    }


    public function GetAllTask(){
        $Data = $this->Db->GetData('SELECT publicID,taskTitle FROM todolist.taskstitle');
        return $Data;
    }
}

$HomeModels = new Home();

?>