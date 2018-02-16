<!Doctype html>
<html>
	<head>
	<title>ลงชื่อเข้าใช้</title>
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
	  		$('.navbar-brand').html("ระบบตรวจสอบการทำธุรกรรม");
		});
        function btnSHPassword() {
            if ($("#inputPasswordLI").attr("type") == "password") {
                $("#inputPasswordLI").attr("type", "text");
                $("#btnpasswordLIHS").html("ซ่อน");
            } else {
                $("#inputPasswordLI").attr("type", "password");
                $("#btnpasswordLIHS").html("แสดง");
            }
        }
        function btnCheckLogin(){
        	var email = $("#inputEmailLI").val();
        	var password = $("#inputPasswordLI").val();
        	if ( email == "" && password ==""){
	    		$("#commentValidationLogin").html('&#9888;'+" กรุณาใส่อีเมลและรหัสผ่าน");
	    		return false;
	    	}
	    	else if ( email == "" && password != ""){
	    		$("#commentValidationLogin").html('&#9888;'+" กรุณาใส่อีเมล");
	    		return false;
	    	}
	    	else if ( email != "" && password == ""){
	    		$("#commentValidationLogin").html('&#9888;'+" กรุณาใส่รหัสผ่าน");
	    		return false;
	    	}
	    	else{
    			if ( email == "topandapisit@hotmail.com" && password == "12345"){
    				return true;
    			}
    			else {
    				$("#commentValidationLogin").html('&#9888;'+" อีเมลหรือรหัสผ่านไม่ถูกต้อง");
    				return false;
    			}
	    	}
        }
	</script>
	</head>
<body class="body">
	<form id="login" name="login" action="{{ URL::to('/home') }}" method="get" enctype="multipart/form-data" onsubmit="return btnCheckLogin()" novalidate>
		<input type="hidden" value="{{ csrf_token() }}" name="_token" >
		<div class="header-bf" id="HDBF" style="color: #ffffff;background-color: #222;">
			@include('header.userheaderbf')
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-2" style="text-align: center;">
			</div>
			<div class="col-md-4 col-sm-8" style="text-align: center;margin-top:9.6%;margin-bottom:9.6%;">
				<div class="panel-group" style="box-shadow:0 0 18px #000000;">
				    <div class="panel panel-primary">
				      	<div class="panel-heading text-center">
				      		<b class="panel-title" id="strInfoLI" style="font-size:150%;">ลงชื่อเข้าใช้งาน</b>
				      	</div>
				      	<div class="panel-body">
				      		<div class="text-left">	
				      		    <div class="col-md-12 col-sm-14">
				      		    	<div class="form-group">
									    <label for="inputEmailLI">อีเมล์</label>
									    <input type="text" class="form-control" required="required" name="inputEmailLI" id="inputEmailLI" placeholder="example@mail.com">
									</div>
									<div class="form-group">
									    <label for="inputPasswordLI">รหัสผ่าน</label>
									    <div class="input-group">
										    <input type="text" class="form-control" required="required" name="inputPasswordLI" id="inputPasswordLI" placeholder="กรุณาใส่รหัสผ่านของคุณ">
										    <span class="input-group-btn">
									        	<button class="btn btn-default" type="button" id="btnpasswordLIHS" onclick="btnSHPassword()">ซ่อน</button>
									      	</span>
									    </div>
									</div>
									<p id="commentValidationLogin" style="color:red"></p>
				      		    </div>	
				      		    <div class="col-md-12 col-sm-16">	  
									<div class="form-group" align="center">
									  	<button type="submit" id="btnLoginLI" class="btn bg-black btn-md form-control"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp; เข้าสู่ระบบ</button>
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
		<div class="footer-bottom" id="ftbHM" style="color: #ffffff;background-color: #222;">
			@include('header.userfooter')
		</div>
	</form>
</body>
<html>
