<!Doctype html>
<html>
	<head>
	<title>ลืมรหัสผ่าน</title>
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
    		padding-bottom: 40px
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
	  		$('.navbar-brand').text("ยินดีต้อนรับสู่ระบบลืมรหัสผ่าน");
		});
	</script>
	</head>
<body class="body">
	<div class="row">
		@include('header.userheaderbf')
		<div class="row">
			<div class="col-md-4 col-sm-2" style="text-align: center;">
			</div>
			<div class="col-md-4 col-sm-8" style="text-align: center;margin-top:11%;margin-bottom:13%;">
				<div class="panel-group" style="box-shadow:0 0 18px #000000;">
				    <div class="panel panel-primary">
				      	<div class="panel-heading text-center">
				      		<b class="panel-title" id="strInfoFP" style="font-size:150%;">ระบบลืมรหัสผ่าน</b>
				      	</div>
				      	<div class="panel-body">
				      		<div class="text-left">	
				      		    <div class="col-md-12 col-sm-16">
				      		    	<div class="form-group">
									    <label for="inputEmailFP">อีเมลล์ที่ลงทะเบียนกับระบบ</label>
									    <input type="text" class="form-control" required="required" name="emailFP" id="inputEmailFP" placeholder="example@mail.com">
									</div>
				      		    </div>
				      		    <div class="col-md-12 col-sm-16">	  
									<div class="form-group" align="center">
									  	<button id="btnSendEmailFP" type="submit" class="btn bg-black btn-md form-control" data-toggle="modal" data-target="#sendPwModal"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp; ส่งรหัสผ่านใหม่ไปยังอีเมล์ของคุณ</button>
									  	@include('frontend.modal.confirmsendnewpw')
									</div>
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
