<div class="modal" id="delete-task" tabindex="-1" role="dialog"  style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100" style="margin-right: -35px;">Görev Başlığı Sil</h5>
                <button type="button" id="close-delete-task-panel" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form class="form-inline justify-content-center" autocomplete="off">
                    <div class="form-group mb-2">
                        <label>Bir Görev Başlığı Seçiniz</label>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <select class="form-control" id="delete-task-lists" style="max-width: 170px;margin-left: 15px;">
                        <option disabled selected value>Bir Başlık Seç</option>
                            <?php 
                            if(!empty($ResultData['tasksData'])){
                                for($i=0;$i<count($ResultData['tasksData']);$i++){?>
                                    <option value="<?php echo $ResultData['tasksData'][$i]['publicID'];?>"><?php echo $ResultData['tasksData'][$i]['taskTitle'];?> </option><?php
                                }
                            }?>
                        </select>
                    </div>
                    <button type="button" class="btn btn-danger mb-2 delete-main-task-title-button">Sil</button>
                </form>
            </div>
        </div>
    </div>
</div>
