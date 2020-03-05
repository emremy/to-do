<?php 
require _core.'Db.core.php';
class Ajax{
    public $Db;
    public $AllFunctions;
    function __construct(){

        $this->Db = new Connected();
        $this->AllFunctions = new AllFunctions();
    }

    function DeleteSingleTask($PublicID){
        $CheckPublicID = $this->Db->Counter('SELECT count(*) FROM todolist.taskdetail WHERE publicID=:PublicID',['PublicID'=>$PublicID]);
        if($CheckPublicID > 0){
            $DeleteSingleTask = $this->Db->DeleteData('DELETE FROM todolist.taskdetail WHERE publicID=:PublicID',['PublicID'=>$PublicID]);
            if($DeleteSingleTask->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


    function UpdateConfirmValue($PublicID){
        $CheckPublicID = $this->Db->Counter('SELECT count(*) FROM todolist.taskdetail WHERE publicID=:PublicID',['PublicID'=>$PublicID]);
        if($CheckPublicID > 0){
            $CheckConfirm = $this->Db->GetData('SELECT confirmTask FROM todolist.taskdetail WHERE publicID=:PublicID',['PublicID'=>$PublicID]);
            if($CheckConfirm[0]['confirmTask'] == 0){
                $UpdateTask = $this->Db->UpdateData('UPDATE todolist.taskdetail SET confirmTask=1  WHERE publicID=:PublicID',['PublicID'=>$PublicID]);
                if($UpdateTask->rowCount() > 0){
                    return true;
                }else{
                    return false;
                }
            }else{
                $UpdateTask = $this->Db->UpdateData('UPDATE todolist.taskdetail SET confirmTask=0  WHERE publicID=:PublicID',['PublicID'=>$PublicID]);
                if($UpdateTask->rowCount() > 0){
                    return true;
                }else{
                    return false;
                }
            }

        }else{
            return false;
        }
    }

    function AddTaskTitle($Title,$RandomKey){
        $CountTitle = $this->Db->Counter('SELECT count(*) FROM todolist.taskstitle WHERE taskTitle=:Title',['Title'=>$Title]);
        if($CountTitle == 0){
            $InsertTitle = $this->Db->InsertData('INSERT INTO todolist.taskstitle SET publicID=:randomKey,taskTitle=:Title',['randomKey'=>$RandomKey,'Title'=>$Title]);
            if($InsertTitle->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    function RandomKey($tableName){
        return $this->AllFunctions->RandomKeyValue('SELECT count(*) FROM todolist.'.$tableName.' WHERE publicID=:ValueKey');
    }


    function DeleteTask($TitleId){
        $CheckTitleId = $this->Db->Counter('SELECT count(*) FROM todolist.taskstitle WHERE publicID=:TitleId',['TitleId'=>$TitleId]);
        if($CheckTitleId > 0){
            $DeleteTitle = $this->Db->DeleteData('DELETE FROM todolist.taskstitle WHERE publicID=:TitleID',['TitleID'=>$TitleId]);
            if($DeleteTitle->rowCount() > 0){
                $CheckTitleDetail = $this->Db->Counter('SELECT count(*) FROM todolist.taskdetail WHERE taskTitleID=:TitleID',['TitleID'=>$TitleId]);
                if($CheckTitleDetail > 0){
                    $DeleteDetail = $this->Db->DeleteData('DELETE FROM todolist.taskdetail WHERE taskTitleID=:TitleID',['TitleID'=>$TitleId]);
                    if($DeleteDetail->rowCount() > 0 ){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return true;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


    function AddTaskDetail($PublicID,$Description){
        $CheckResult  = $this->Db->Counter('SELECT count(*) FROM todolist.taskstitle WHERE publicID=:PublicID',['PublicID'=>$PublicID]);
        if($CheckResult > 0){
            $RandomValue = $this->RandomKey('taskdetail');
            $InsertTask = $this->Db->InsertData('INSERT INTO todolist.taskdetail SET publicID=:randomKey,taskDescription=:Descrip,confirmTask=:Result,taskTitleID=:TitleID',['randomKey'=>$RandomValue,'Descrip'=>$Description,'Result'=>false,'TitleID'=>$PublicID]);
            if($InsertTask->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

}
$AjaxModels = new Ajax();


?>