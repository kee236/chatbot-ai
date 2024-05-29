<div id="on_modal" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-material m-t-10" method="post" action="<?php echo base_url() . 'teams/edituserstatus'; ?>" autocomplete="off">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-edit"></i>&nbsp;ระงับผู้ใช้งาน</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="bootbox-body">
                        <input type="hidden" name="user_id" id='user_id' value="<?php echo $user_id; ?>">
                        <input type="hidden" name="teams_id" id="teams_id" value="<?php echo $teams_id; ?>"/>
                        <br/>
                        <h4 class="text-center"><i class='fa fa-close'></i> ต้องการระงับผู้ใช้งาน</h4>
                        <br/>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> บันทึก</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true" ><i class="fa fa-close"></i> ยกเลิก</button>
                </div>
            </form>
        </div>                    
    </div>
</div>         