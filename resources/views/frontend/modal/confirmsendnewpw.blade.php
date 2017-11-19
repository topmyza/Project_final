<style>
    .modal {
       top:30%;
       outline: none;
       overflow:hidden;
    }
</style>
<!-- Modal -->
<div class="modal fade" id="sendPwModal" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #222222;color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                <b class="modal-title" style="font-size:150%">ยืนยันการส่งรหัสผ่าน</b>
            </div>
            <div class="modal-body">             
                  <div class="container-fluid">
                      <b for="" style="font-size: 115%">คุณต้องการยืนยันการส่งรหัสผ่านใหม่ไปยังอีเมลล์ที่ระบุหรือไม่</b>
                      <br>
                  </div>
            </div>
            <div class="modal-footer">
                <form action="{{ URL::to('/login') }}" method="get" enctype="multipart/form-data">
                    <div class="container-fluid">
                       <div class="text-center">
                               <!-- <input type="hidden" value="{{ csrf_token() }}" name="_token" > -->
                               <button type="submit" id="btnConSendPassword" class="btn bg-black btn-md" style="margin-left: 5%;margin-right: 15%"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp; ตกลง</button>
                               <button type="button" id="btnCancelSendPassword" class="btn bg-black btn-md" data-dismiss="modal" style="margin-left: 15%;margin-right: 5%"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp; ยกเลิก</button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>