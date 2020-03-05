<?php 
include _functions.'Modals/AddMainTaskTitle.php';
include _functions.'Modals/DeleteMainTask.php';
?>
<div class="container">
    <div class="row" style="margin-bottom: 80px;">
        <div class="col-12 pt-4 card my-4 shadow">
            <div class="card-body pt-0 pb-4">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <h3 class="mb-0">Ana Başlıklar</h3>
                    </div>
                    <div>
                        <button type="button" id="Add-Main-Task" class="btn btn-primary">Ana Başlık Ekle</button>
                        <button type="button" id="Delete-Main-Task" class="ml-2 btn btn-danger">Ana Başlık Sil</button>
                    </div>
                </div>
                <hr class="mt-3">
                <div class="d-flex flex-wrap mt-3">
                <?php 
                if(!empty($ResultData['tasksData'])){
                    for($i=0;$i<count($ResultData['tasksData']);$i++){
                ?>
                    <div class="card single-class bg-light col-4" >
                        <div class="card-body d-flex align-items-center justify-content-center flex-column">
                            <h5 class="card-title text-center"><?php echo $ResultData['tasksData'][$i]['taskTitle'];?></h5>
                            <a href="./tasks?_taskId=<?php echo $ResultData['tasksData'][$i]['publicID'];?>" class="mt-2 w-50 btn btn-primary">Başlığa Bak</a>
                        </div>
                    </div>
                <?php
                    }
                ?></div><?php 
                }else{
                ?>
                </div>
                <div class="alert alert-warning">
                    <strong>Henüz Burada Bir Görev Başlığı Bulamadık</strong><br>
                    <small>Görev Başlığı Eklemek İçin <strong>Ana Başlık Ekle</strong>'ye Tıklayınız.</small>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>