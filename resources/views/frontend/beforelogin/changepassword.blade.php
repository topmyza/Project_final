<!Doctype html>
<html>
	<head>
	<title>เปลี่ยนรหัสผ่าน</title>
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
	  		$('.navbar-brand').text("ยินดีต้อนรับสู่ระบบเปลี่ยนรหัสผ่าน");
		});
	</script>
	</head>
<body class="body">
	<div class="row">
		@include('header.userheaderbf')
		<div class="row">
			<div class="col-md-4 col-sm-2" style="text-align: center;">
			</div>
			<div class="col-md-4 col-sm-8" style="text-align: center;margin-top:6.5%;margin-bottom:6.5%;">
				<div class="panel-group" style="box-shadow:0 0 18px #000000;" style="height:1000px">
				    <div class="panel panel-primary">
				      	<div class="panel-heading text-center">
				      		<b class="panel-title" id="strInfoCP" style="font-size:150%;">ระบบเปลี่ยนรหัสผ่าน</b>
				      	</div>
				      	<div class="panel-body">
				      		<div class="text-left">	
				      			<div class="col-md-12 col-sm-14">
							      	<div class="form-group">
									    <label for="inputEmailCP">อีเมลล์</label>
									    <input type="text" class="form-control" required="required" name="inputEmailCP" id="inputEmailCP" placeholder="example@mail.com">
									</div>
									<div class="form-group">
									    <label for="inputCurrentPasswordCP">รหัสผ่านปัจจุบัน</label>
									    <input type="text" class="form-control" required="required" name="inputCurrentPasswordCP" id="inputCurrentPasswordCP" placeholder="กรุณาใส่รหัสผ่านปัจจุบันของคุณ">
									</div>
									<div class="form-group">
									    <label for="inputNewPasswordCP">รหัสผ่านใหม่</label>
									    <input class="form-control" required="required" name="inputNewPasswordCP" id="inputNewPasswordCP" placeholder="ตั้งรหัสผ่านใหม่ของคุณ">
									</div>
									<div class="form-group">
									    <label for="inputReNewPasswordCP">ยืนยันรหัสผ่านใหม่</label>
									    <input type="password" class="form-control" required="required" name="inputReNewPasswordCP" id="inputReNewPasswordCP" placeholder="ยืนยันรหัสผ่านใหม่ของคุณอีกครั้ง">
									</div>
								</div>
								<div class="col-md-12 col-sm-16">
									
										<div class="form-group" align="center">
										  	<button type="submit" id="btnChangePasswordCP" class="btn bg-black btn-md form-control" data-toggle="modal" data-target="#changePwModal"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp; เปลี่ยนรหัสผ่าน</button>
										  	@include('frontend.modal.confirmchangepw')
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
	<div class="footer-bottom" id="ftbCP" style="color: #ffffff;background-color: #222;">
		@include('header.userfooter')
	</div>
</body>
<html>
