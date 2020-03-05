<?php 
if(!empty($ResultData['Data'])){

    for($i=0; $i<count($ResultData['Data']);$i++){
?>

    <tr>
        <td class="align-middle" style="width:10px">
        </td>
        
        <td class="align-middle">
        <?php
        if($ResultData['Data'][$i]['confirmTask'] == false){
            echo $ResultData['Data'][$i]['taskDescription'];
        }else{?>
            <del> <?php echo $ResultData['Data'][$i]['taskDescription'];?> </del>
        <?php } ?>
        </td>
        <td class="align-middle text-center" style="width:140px">
            <button type="button" class="btn btn-danger option-single-task mr-3 delete-single-task" value="<?php echo $ResultData['Data'][$i]['publicID']?>">
                <i class="fa fa-edit"></i>
            </button>
            <button type="button" class="btn btn-info option-single-task confirm-single-task" value="<?php echo $ResultData['Data'][$i]['publicID']?>">
                <i class="fa fa-edit"></i>
            </button>
        </td>
    </tr>
<?php 

    }
}
?>
