<div id="on_modal" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-material m-t-10" method="post" action="<?php echo base_url() . 'packagesms/editstatussms'; ?>" autocomplete="off">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-edit"></i>&nbsp;ระงับอัตราค่าบริการ SMS</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="bootbox-body">
                        <input type="hidden" name="package_id" id='package_id' value="<?php echo $package_id; ?>">
                        <br/>
                        <h4 class="text-center"><i class='fa fa-close'></i> ต้องการระงับอัตราค่าบริการ SMS</h4>
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