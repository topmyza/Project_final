<!Doctype html>
<html>
	<head>
	<title>ลงทะเบียนผู้ใช้</title>
	@include('header.scriptheader')
	<style>
		.body { 
			overflow-x:hidden;
			overflow-y:scroll;
			background: #e7f4ff;
			/*background: #8d858b;*/
			height: 100%;
			width: 100%;
			left: 0;
			top: 0;
			background-repeat: no-repeat;
    		background-attachment: fixed;
    		clear: both;
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
		$(document).ready(function() {
	  		$('.navbar-brand').text("ยินดีต้อนรับสู่ระบบลงทะเบียนผู้ใช้งาน");
		});
	</script>
	</head>
<body class="body">
	<div class="row">
		@include('header.userheaderbf')
		<div class="row">
			<div class="col-md-4 col-sm-2" style="text-align: center;">
			</div>
			<div class="col-md-4 col-sm-8" style="text-align: center;margin-top:2%;margin-bottom:2%;">
				<div class="panel-group" style="box-shadow:0 0 18px #000000;" style="height:1000px">
				    <div class="panel panel-primary">
				      	<div class="panel-heading text-center">
				      		<b class="panel-title" id="strInfoRES" style="font-size:150%;">ลงทะเบียนผู้ใช้งาน</b>
				      	</div>
				      	<div class="panel-body">
				      		<div class="text-left">	
				      			<div class="col-md-12 col-sm-14">
							      	<div class="form-group">
									    <label for="inputEmailSI">อีเมลล์</label>
									    <input type="text" class="form-control" required="required" name="emailSI" id="inputEmailSI" placeholder="example@mail.com">
									</div>
									<div class="form-group">
									    <label for="inputServicePointNameSI">ชื่อจุดให้บริการ</label>
									    <input type="text" class="form-control" required="required" name="servicepointnameSI" id="inputServicePointName" placeholder="กรุณาใส่ชื่อจุดให้บริการของคุณ">
									</div>
									<div class="form-group">
									    <label for="inputServicePointAddressSI">ที่อยู่จุดให้บริการ</label>
									    <textarea type="text" class="form-control" required="required" name="servicepointaddressSI" id="inputServicePointAddressSI" rows="2" placeholder="กรุณาใส่ที่อยู่จุดให้บริการของคุณ"></textarea>
									</div>
									<div class="form-group">
									    <label for="inputPasswordSI">รหัสผ่าน</label>
									    <input class="form-control" required="required" name="passwordSI" id="inputPasswordSI" placeholder="ตั้งรหัสผ่านของคุณ">
									</div>
									<div class="form-group">
									    <label for="inputRePasswordSI">ยืนยันรหัสผ่าน</label>
									    <input type="password" class="form-control" required="required" name="repasswordSI" id="inputRePasswordSI" placeholder="ยืนยันรหัสผ่านของคุณอีกครั้ง">
									</div>
								</div>
								<div class="col-md-12 col-sm-16">
									
										<div class="form-group" align="center">
										  	<button type="submit" id="btnCreateAccountSI" class="btn bg-black btn-md form-control" data-toggle="modal" data-target="#resModal"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp; สร้างบัญชีผู้ใช้งาน</button>
										  	@include('frontend.modal.confirmresgister')
										</div>
									<!-- </form> -->
								</div>
							</div>
				      	</div>
				    </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-2" style="text-align: center;">
			</div>
		</div>
	</div>
	<div class="footer-bottom" id="ftbHM" style="color: #ffffff;background-color: #222;">
		@include('header.userfooter')
	</div>
</body>
<html>
