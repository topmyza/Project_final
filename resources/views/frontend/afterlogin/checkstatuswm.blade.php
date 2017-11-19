<!Doctype html>
<html>
	<head>
	<title>สถานะของเครื่องซักผ้าอัตโนมัติ</title>
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
		$(document).ready(function(){
			$('#inputChooseWMStatus').on('change', function() {
			    if ( this.value == 'chooseWMAll'){
			        $("#StatusWM1").show();
			        $("#StatusWM2").show();
			        $("#StatusWM3").show();
			        $("#StatusWM4").show();
			        $("#StatusWM5").show();
			    }
			    else if (this.value == 'chooseWM1'){
			        $("#StatusWM1").show();
			        $("#StatusWM2").hide();
			        $("#StatusWM3").hide();
			        $("#StatusWM4").hide();
			        $("#StatusWM5").hide();
			    }
			    if (this.value == 'chooseWM2'){
			        $("#StatusWM1").hide();
			        $("#StatusWM2").show();
			        $("#StatusWM3").hide();
			        $("#StatusWM4").hide();
			        $("#StatusWM5").hide();
			    }
			    if (this.value == 'chooseWM3'){
			        $("#StatusWM1").hide();
			        $("#StatusWM2").hide();
			        $("#StatusWM3").show();
			        $("#StatusWM4").hide();
			        $("#StatusWM5").hide();
			    }
			    if (this.value == 'chooseWM4'){
			        $("#StatusWM1").hide();
			        $("#StatusWM2").hide();
			        $("#StatusWM3").hide();
			        $("#StatusWM4").show();
			        $("#StatusWM5").hide();
			    }
			    if (this.value == 'chooseWM5'){
			        $("#StatusWM1").hide();
			        $("#StatusWM2").hide();
			        $("#StatusWM3").hide();
			        $("#StatusWM4").hide();
			        $("#StatusWM5").show();
			    }
			});
	    });
	</script>
	</head>
<body class="body">
	<div class="row">
		@include('header.userheaderat')
		<div class="row">
			<div class="col-md-1 col-sm-2" style="text-align: center;">
			</div>
			<div class="col-md-10 col-sm-8" style="text-align: center;margin-top:4%; margin-bottom:15%;">
				<div class="panel-group" style="box-shadow:0 0 15px #000000;">
					<div class="panel panel-primary">
					    <div class="panel-heading text-center">
					    	<b class="panel-title" id="strInfoHM" style="font-size: 140%">ดูสถานะเครื่องซักผ้าอัตโนมัติ</b>
					 	</div>
					    <div class="panel-body">
					    	<div class="dataSearch-heading">
					    		<div class="container-fluid">
									<div class="col-md-3 col-sm-6 control-label">
										 <p class="text-left">
						   		 	 	 	 <b for="inputTransactionIDTH" style="font-size: 120%;">เลือกดูสถานะของเครื่องซักผ้า:</b>
						   		 	 	 </p>
									</div>
									<div class="col-md-3 col-sm-6">
										<select id="inputChooseWMStatus" name="inputChooseWMStatus" class="form-control">
							      	 	    <option value="chooseWMAll">ทั้งหมด</option>
											<option value="chooseWM1">เครื่องที่ 1</option>
											<option value="chooseWM2">เครื่องที่ 2</option>
											<option value="chooseWM3">เครื่องที่ 3</option>
											<option value="chooseWM4">เครื่องที่ 4</option>
											<option value="chooseWM5">เครื่องที่ 5</option>
										</select>
							      	</div>
								</div>	
								<div class="container-fluid" id="StatusWM1">
									<br>
									<div class="col-md-12 col-sm-24 control-label text-left">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowWM1" style="font-size: 140%;">เครื่องซักผ้าอัตโนมัติเครื่องที่: 1</b>
						   		 	 	 </p>
							      	</div>
							      	<div class="col-md-2 col-sm-2 control-label text-left">
							      	     <p class="text-left">
						   		 	 	 	 <b for="inputShowStatusWM1" style="font-size: 120%;color: blue;">สถานะการทำงาน:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-3">
						                <input id="inputShowStatusWM1" class="form-control" type="text" name="inputShowStatusWM1" value="ปกติ" maxlength="50" style="font-size: 120%;color:green;">
						                <script>$("#inputShowStatusWM1").prop('disabled', true);</script>
							      	</div>
							      	<div class="col-md-1 col-sm-12 control-label">
									</div>
									<div class="col-md-3 col-sm-3 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="inputShowFreqDialyWM1" style="font-size: 120%;color: blue;">ความถี่ในการใช้งานในวันนี้(ครั้ง):</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-3">
						                <input id="inputShowFreqDialyWM1" class="form-control" type="text" name="inputShowFreqDialyWM1" value="13" maxlength="50" style="font-size: 120%;color:green;">
						                <script>$("#inputShowFreqDialyWM1").prop('disabled', true);</script>
							      	</div>
							      	<br>	
								</div>
								<div class="container-fluid" id="StatusWM2">
									<br>
									<div class="col-md-12 col-sm-24 control-label text-left">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowWM2" style="font-size: 140%">เครื่องซักผ้าอัตโนมัติเครื่องที่: 2</b>
						   		 	 	 </p>
							      	</div>
							      	<div class="col-md-2 col-sm-2 control-label text-left">
							      	     <p class="text-left">
						   		 	 	 	 <b for="inputShowStatusWM2" style="font-size: 120%;color: blue;">สถานะการทำงาน:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-3">
						                <input id="inputShowStatusWM2" class="form-control" type="text" name="inputShowStatusWM2" value="ชำรุด" maxlength="50" style="font-size: 120%;color:red;">
						                <script>$("#inputShowStatusWM2").prop('disabled', true);</script>
							      	</div>
							      	<div class="col-md-1 col-sm-12 control-label">
									</div>
									<div class="col-md-3 col-sm-3 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="inputShowFreqDialyWM2" style="font-size: 120%;color: blue;">ความถี่ในการใช้งานในวันนี้(ครั้ง):</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-3">
						                <input id="inputShowFreqDialyWM2" class="form-control" type="text" name="inputShowFreqDialyWM2" value="0" maxlength="50" style="font-size: 120%;color:red;">
						                <script>$("#inputShowFreqDialyWM2").prop('disabled', true);</script>
							      	</div>
							      	<br>	
								</div>
								<div class="container-fluid" id="StatusWM3">
									<br>
									<div class="col-md-12 col-sm-24 control-label text-left">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowWM3" style="font-size: 140%">เครื่องซักผ้าอัตโนมัติเครื่องที่: 3</b>
						   		 	 	 </p>
							      	</div>
							      	<div class="col-md-2 col-sm-2 control-label text-left">
							      	     <p class="text-left">
						   		 	 	 	 <b for="inputShowStatusWM3" style="font-size: 120%;color: blue;">สถานะการทำงาน:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-3">
						                <input id="inputShowStatusWM3" class="form-control" type="text" name="inputShowStatusWM3" value="ปกติ" maxlength="50" style="font-size: 120%;color:green;">
						                <script>$("#inputShowStatusWM3").prop('disabled', true);</script>
							      	</div>
							      	<div class="col-md-1 col-sm-12 control-label">
									</div>
									<div class="col-md-3 col-sm-3 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="inputShowFreqDialyWM3" style="font-size: 120%;color: blue;">ความถี่ในการใช้งานในวันนี้(ครั้ง):</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-3">
						                <input id="inputShowFreqDialyWM3" class="form-control" type="text" name="inputShowFreqDialyWM3" value="5" maxlength="50" style="font-size: 120%;color:green;">
						                <script>$("#inputShowFreqDialyWM3").prop('disabled', true);</script>
							      	</div>
							      	<br>	
								</div>
								<div class="container-fluid" id="StatusWM4">
									<br>
									<div class="col-md-12 col-sm-24 control-label text-left">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowWM4" style="font-size: 140%">เครื่องซักผ้าอัตโนมัติเครื่องที่: 4</b>
						   		 	 	 </p>
							      	</div>
							      	<div class="col-md-2 col-sm-2 control-label text-left">
							      	     <p class="text-left">
						   		 	 	 	 <b for="inputShowStatusWM4" style="font-size: 120%;color: blue;">สถานะการทำงาน:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-3">
						                <input id="inputShowStatusWM4" class="form-control" type="text" name="inputShowStatusWM2" value="ปกติ" maxlength="50" style="font-size: 120%;color:green;">
						                <script>$("#inputShowStatusWM4").prop('disabled', true);</script>
							      	</div>
							      	<div class="col-md-1 col-sm-12 control-label">
									</div>
									<div class="col-md-3 col-sm-3 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="inputShowFreqDialyWM4" style="font-size: 120%;color: blue;">ความถี่ในการใช้งานในวันนี้(ครั้ง):</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-3">
						                <input id="inputShowFreqDialyWM4" class="form-control" type="text" name="inputShowFreqDialyWM4" value="7" maxlength="50" style="font-size: 120%;color:green;">
						                <script>$("#inputShowFreqDialyWM4").prop('disabled', true);</script>
							      	</div>
							      	<br>	
								</div>
								<div class="container-fluid" id="StatusWM5">
									<br>
									<div class="col-md-12 col-sm-24 control-label text-left">
							      	     <p class="text-left">
						   		 	 	 	 <b for="txtShowWM5" style="font-size: 140%">เครื่องซักผ้าอัตโนมัติเครื่องที่: 5</b>
						   		 	 	 </p>
							      	</div>
							      	<div class="col-md-2 col-sm-2 control-label text-left">
							      	     <p class="text-left">
						   		 	 	 	 <b for="inputShowStatusWM5" style="font-size: 120%;color: blue;">สถานะการทำงาน:</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-3">
						                <input id="inputShowStatusWM5" class="form-control" type="text" name="inputShowStatusWM5" value="ชำรุด" maxlength="50" style="font-size: 120%;color:red;">
						                <script>$("#inputShowStatusWM5").prop('disabled', true);</script>
							      	</div>
							      	<div class="col-md-1 col-sm-12 control-label">
									</div>
									<div class="col-md-3 col-sm-3 control-label">
							      	     <p class="text-left">
						   		 	 	 	 <b for="inputShowFreqDialyWM5" style="font-size: 120%;color: blue;">ความถี่ในการใช้งานในวันนี้(ครั้ง):</b>
						   		 	 	 </p>
							      	</div>
							     	<div class="col-md-3 col-sm-3">
						                <input id="inputShowFreqDialyWM5" class="form-control" type="text" name="inputShowFreqDialyWM5" value="0" maxlength="50" style="font-size: 120%;color:red;">
						                <script>$("#inputShowFreqDialyWM5").prop('disabled', true);</script>
							      	</div>
							      	<br>	
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
	<div class="footer-bottom" id="ftbHM" style="color: #ffffff;background-color: #222;clear: both;bottom: 0px;width: 100%;position: fixed;">
		@include('header.userfooter')
	</div>
</body>
<html>
