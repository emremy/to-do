
<?php 
include _functions.'Modals/AddTask.php';
?>
<div class="container">
    <div class="row" style="margin-bottom: 80px;">
        <div class="col-12 pt-4 card my-4 shadow">
            <div class="card-body pt-0">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <button type="button" class="btn btn-light mr-3 px-2" style="line-height: 0px;">
                            <a href="./" style="text-decoration:none;"><i class="fa fa-angle-left"></i></a>
                        </button>
                        <h3 class="mb-0 class-info"><?php echo $ResultData['DataTitle'][0]['taskTitle'];?></h3>
                    </div>
                    <button type="button" class="btn btn-primary task-detail-add">Görev Ekle</button>
                </div>
                <hr class="mt-3">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><strong>#</strong></th>
                            <th>Detaylar</th>
                            <th class="text-center">Durum</th>
                        </tr>
                    </thead>
                    <tbody class="students-list">
                        <?php require_once _functions.'/Modals/TaskList.php'?>
                    </tbody>
            </div>
        </div>
    </div>
</div>
