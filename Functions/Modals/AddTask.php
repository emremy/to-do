<div class="modal add-big-panel"tabindex="-1" role="dialog"  style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100" style="margin-right: -35px;">Görev Ekle</h5>
                <button type="button"  class="close close-big-panel" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form autocomplete="off">
                    <div class="form-group mb-2">
                        <input type="hidden" name="_MainTitle" id="_MainTitle" value="<?php echo $ResultData['MainTitleId'];?>">
                        <label>Bir Görev Ekleyiniz</label>
                        <textarea class="form-control" id="text-task-textarea" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary mb-2 add-button-task">Ekle</button>
                </form>
            </div>
        </div>
    </div>
</div>