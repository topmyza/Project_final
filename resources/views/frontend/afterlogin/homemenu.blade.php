<!Doctype html>
<html>
	<head>
	<title>บัญชีผู้ใช้</title>
	@include('header.scriptheader')
	<style>
		.body {
			background: #e7f4ff;
			/*background: #d7f4f9;*/
			overflow-x:hidden;
			overflow-y:scroll;
			/*d7f4f9*/
			height: 100%;
			width: 100%;
			left: 0;
			top: 0;
			background-repeat: no-repeat;
    		background-attachment: fixed;
		}
		.panel > .panel-heading {
		    background-image: none;
		    background-color: #222222;
		    color: white;

		}
		.bg-black{
			color:#9d9d9d;
			background-color:#222222;
		}
		.bg-black:hover{
			color:#ffffff;
		}
	</style>  
	<script>
		function getEditAccount() {
	        $("#txtShowServicePointNameHM").prop('disabled', false);
	        $("#txtShowServicePointAddressHM").prop('disabled', false);
	        $("#txtShowNameAndSurnameHM").prop('disabled', false);    
	        $("#txtShowPhoneNumberHM").prop('disabled', false);
			$('#btnEditAccountHM').hide();
			$('#btnSaveAccountHM').show();
	    }
	   
	    function getSaveAccount() {
	    	$("#txtShowServicePointNameHM").prop('disabled', true);
	        $("#txtShowServicePointAddressHM").prop('disabled', true);
	        $("#txtShowNameAndSurnameHM").prop('disabled', true);    
	        $("#txtShowPhoneNumberHM").prop('disabled', true);
	        $('#btnSaveAccountHM').hide();
			$('#btnEditAccountHM').show();
	    }
	</script>
	</head>
<body class="body">
	<div class="row">
		@include('header.userheaderat')
		<div class="row">
			<div class="col-md-1 col-sm-2" style="text-align: center;">
			</div>
			<div class="col-md-10 col-sm-8" style="text-align: center;margin-top:4%; margin-bottom:6%;">
				<div class="panel-group" style="box-shadow:0 0 15px #000000;">
					<div class="panel panel-primary">
					    <div class="panel-heading text-center">
					    	<b class="panel-title" id="strInfoHM" style="font-size: 140%">จัดการบัญชีของคุณ</b>
					 	</div>
					    <div class="panel-body">
					    	<div class="dataSearch-heading">					    		 
					    		<div class="container-fluid">
									<div class="col-md-12 col-sm-24 control-label">
							      	     <p class="text-center">
						   		 	 	 	 <b for="txtDescritionHM" style="font-size: 115%;color: red">คุณสามารถแก้ไขข้อมูลในส่วนชื่อจุดให้บริการ, ที่อยู่จุดให้บริการ, ชื่อ-นามสกุลและเบอร์โทรศัพท์ของคุณได้</b>
						   		 	 	 </p>
							      	</div>
							    </div>
					    		<br>
								<div class="container-fluid">
									<div class="col-md-2 col-sm-6 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowServicePointIDHM" style="font-size: 120%">เลขที่จุดให้บริการ:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-6">
						                <input id="txtShowServicePointIDHM" class="form-control" type="text" name="txtShowServicePointIDHM" value="1548521523" maxlength="50">
						                <script>$("#txtShowServicePointIDHM").prop('disabled', true);</script>
							      	</div>
							      	<div class="col-md-1 col-sm-12 control-label">
									</div>
									<div class="col-md-3 col-sm-6 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowAccountCreationDateHM" style="font-size: 120%">วันที่สร้างบัญชี:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-6">
						                <input id="txtShowAccountCreationDateHM" class="form-control" type="text" name="txtShowAccountCreationDateHM" value="10/01/2017" maxlength="50">
						                <script>$("#txtShowAccountCreationDateHM").prop('disabled', true);</script>
							      	</div>
								</div>
								<br>
								<div class="container-fluid">
									<div class="col-md-2 col-sm-6 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowEmailHM" style="font-size: 120%">อีเมลล์ผู้ใช้:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-6">
						                <input id="txtShowEmailHM" class="form-control" type="text" name="txtShowEmailHM" value="example@mail.com" maxlength="50">
						                <script>$("#txtShowEmailHM").prop('disabled', true);</script>
							      	</div>
							      	<div class="col-md-1 col-sm-12 control-label">
									</div>
							      	<div class="col-md-3 col-sm-6 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowServicePointNameHM" style="font-size: 120%">ชื่อจุดให้บริการ:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-6">
						                <input id="txtShowServicePointNameHM" class="form-control" type="text" name="txtShowServicePointNameHM" value="จุดให้บริการ DTMZ-01" placeholder="กรุณาใส่ชื่อจุดให้บริการของคุณ" maxlength="50">
						                <script>$("#txtShowServicePointNameHM").prop('disabled', true);</script>
							      	</div>
								</div>
								<br>
								<div class="container-fluid">
									<div class="col-md-2 col-sm-6 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowNameAndSurnameHM" style="font-size: 120%">ชื่อ-นามสกุล:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-6">
						                <input id="txtShowNameAndSurnameHM" class="form-control" type="text" name="txtShowNameAndSurnameHM" placeholder="กรุณาใส่ชื่อและนามสกุลของผู้ใช้" value="อภิสิทธิ์ โชติรัตนอมรกิจ" maxlength="200">
						                <script>$("#txtShowNameAndSurnameHM").prop('disabled', true);</script>
							      	</div>
							      	<div class="col-md-1 col-sm-12 control-label">
									</div>
							      	<div class="col-md-3 col-sm-6 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowPhoneNumberHM" style="font-size: 120%">เบอร์โทรศัพท์ผู้ใช้:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-6">
						                <input id="txtShowPhoneNumberHM" class="form-control" type="text" name="txtShowPhoneNumberHM" placeholder="กรุณาใส่เบอร์โทรศัพท์ของคุณ" value="0964393198" maxlength="50">
						                <script>$("#txtShowPhoneNumberHM").prop('disabled', true);</script>
							      	</div>
								</div>
								<br>
								<div class="container-fluid">
									<div class="col-md-2 col-sm-3 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowServicePointAddressHM" style="font-size: 120%">ที่อยู่จุดให้บริการ:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-10 col-sm-9">
						                <textarea type="text" class="form-control" required="required" name="txtShowServicePointAddressHM" id="txtShowServicePointAddressHM" rows="2" placeholder="กรุณาใส่ที่อยู่จุดให้บริการของคุณ" style="overflow-x:hidden;">35/410 หมู่2 ซอยประชาอุทิศ 91/2 ถนนประชาอุทิศ แขวงทุ่งครุ เขตทุ่งครุ กรุงเทพมหานคร 10140</textarea>
						                <script>$("#txtShowServicePointAddressHM").prop('disabled', true);</script>
							      	</div>
								</div>
								<br>
								<div class="container-fluid">
									<div class="col-md-12 col-xs-24 text-center">
										 <button type="button" class="btn bg-black btn-lg" id="btnEditAccountHM" name="btnEditAccount" onclick="getEditAccount()"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp; แก้ไขข้อมูล</button>					     		 
								     	 <button type="button" class="btn bg-black btn-lg" id="btnSaveAccountHM" name="btnSaveAccount" onclick="getSaveAccount()"><span class="glyphicon glyphicon-saved"></span>&nbsp;&nbsp; บันทึกข้อมูล</button>
								     	 <script>$('#btnSaveAccountHM').hide();</script>	
							     	</div>
								</div>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1 col-sm-2" style="text-align: center;">
			</div>
		</div>
	</div>
	<div class="footer-bottom" id="ftbHM" style="color: #ffffff;background-color: #222;">
		@include('header.userfooter')
	</div>
</body>
<html>
