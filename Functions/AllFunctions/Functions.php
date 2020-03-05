<?php 

class AllFunctions extends Connected{


    public function RandomKeyValue($Sql){
        $RandomKey = '';
        
        while(true){
            $Value = rand(10000,99999);
            $SqlResult = $this->Counter($Sql,['ValueKey'=>$Value]);
            if($SqlResult == 0){
                $RandomKey = $Value;
                break;
            }
        }
        return $RandomKey;
    }
    
}

?>