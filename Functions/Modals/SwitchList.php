<div class="d-flex">
        <h5 style="line-height: 33px;">Ana Görevler: </h5>
        <select class="form-control globalTasksList" style="max-width: 170px;margin-left: 15px;">
        <option disabled selected value>Bir Başlık Seç</option>
        <?php 
            if(!empty($ResultData['tasksData'])){
                for($i=0;$i<count($ResultData['tasksData']);$i++){
                    if(!empty($ResultData['DataTitle'][0]['taskTitle'])){
                        if($ResultData['tasksData'][$i]['taskTitle'] == $ResultData['DataTitle'][0]['taskTitle']){?>
                            <option selected value="<?php echo $ResultData['tasksData'][$i]['publicID'];?>"><?php echo $ResultData['tasksData'][$i]['taskTitle'];?> </option><?php
                        }else{
                        ?>
                        <option value="<?php echo $ResultData['tasksData'][$i]['publicID'];?>"><?php echo $ResultData['tasksData'][$i]['taskTitle'];?> </option><?php
                        }
                    }else{?>
                        <option value="<?php echo $ResultData['tasksData'][$i]['publicID'];?>"><?php echo $ResultData['tasksData'][$i]['taskTitle'];?> </option><?php
                    }
            }
        }?>
        </select>
</div>