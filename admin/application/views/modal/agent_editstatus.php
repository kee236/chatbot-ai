<div id="on_modal" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="m-t-10" method="post" action="<?php echo base_url() . 'agent/editstatus'; ?>" autocomplete="off">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-trash"></i>&nbsp;ต้องการลบ Chatbot</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="bootbox-body">
                        <input type="hidden" name="agent_id" id='agent_id' value="<?php echo $agent_id; ?>">
                        <br/>
                        <h4 class="text-center"><i class='fa fa-close'></i> ยืนยันการลบข้อมูล Chatbot ใช่หรือไหม ?</h4>
                        <br/>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info"><i class="fa fa-trash"></i> ยืนยัน</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true" ><i class="fa fa-close"></i> ยกเลิก</button>
                </div>
            </form>
        </div>                    
    </div>
</div>           