<?php 


class Connected{
    private $Dbhost = 'localhost';
    private $Dbname='todolist';
    private $Dbuser = 'root';
    private $Dbpass = '';
    private $Port = 3308;
    protected $Pdo;

    public function __construct(){

        $this->Connect();
    }


    private function Connect(){
        $this->Pdo = new PDO("mysql:host=$this->Dbhost;port=$this->Port;Dbname=$this->Dbname;charset=utf8", $this->Dbuser, $this->Dbpass);  
    }


    public function GetData($Sql,$Params=[]){
        $Prepare = $this->Pdo->prepare($Sql);
        if($Prepare->execute($Params)){
            while($Row = $Prepare->fetch(PDO::FETCH_ASSOC)){
                $PostData[] = $Row;
            }
            if(!empty($PostData)){
                return $PostData;
            }
        }else{
            return false;
        }
    }

    public function Counter($Sql,$Params){
        $Sql = $this->Pdo->prepare($Sql);
        $Sql->execute($Params);
        return $Sql->fetchColumn();
    }

    public function InsertData($Sql,$Params=[]){
        $Sql = $this->Pdo->prepare($Sql);
        $Sql->execute($Params);
        return $Sql;
    }


    public function DeleteData($Sql,$Params=[]){
        $Sql = $this->Pdo->prepare($Sql);
        $Sql->execute($Params);
        return $Sql;
    }

    public function UpdateData($Sql,$Params=[]){
        $Sql = $this->Pdo->prepare($Sql);
        $Sql->execute($Params);
        return $Sql;
    }
}
require _functions.'AllFunctions/Functions.php';




?>