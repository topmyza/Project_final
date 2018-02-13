<!Doctype html>
<html>
	<head>
	<title>รายการธุรกรรมย้อนหลัง</title>
	@include('header.scriptheader')
	<style>
		.body { 
			background: #e7f4ff;
			/*background: #d7f4f9;*/
			overflow-x:hidden;
			overflow-y:scroll;
			height: 100%;
			width: 100%;
			left: 0;
			top: 0;
			background-repeat: no-repeat;
    		background-attachment: fixed;
    		clear: both;
    		top: 0px;
    		padding-bottom: 40px;
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
		.affix {
	        width: 100%;
	        z-index: 9999 !important;
	    }
	    .affix + .container-fluid {
	        padding-top: 70px;
	    }
	   
	</style> 
	<script>
		$(document).ready(function(){
			$('#THTable').dataTable({
			 "autoWidth": false,
			 "searching": false,
			 "bProcessing": true,
			 "serverSide": false,
		     "iDisplayLength": 10,
	         "bDestroy": true,
	         "responsive": true
	         });
			$('#datepickerStartDate').datepicker({
				format : "dd/mm/yyyy",
				autoclose : true,
				endDate: "0d",
				todayHighlight : true
			});
			$('#datepickerEndDate').datepicker({
				format : "dd/mm/yyyy",
				autoclose : true,
				endDate: "0d",
				todayHighlight : true
			});
			$('#datepickerViewDay').datepicker({
				format : "dd/mm/yyyy",
				autoclose : true,
				endDate: "0d",
				todayHighlight : true
			});
			$('#datepickerViewMonth').datepicker({
				format : "mm/yyyy",
				autoclose : true,
				startView: "months",
			    minViewMode: "months",
			    endDate: "0m"
			});
			$('#datepickerViewYear').datepicker({
				format : "yyyy",
				autoclose : true,
				viewMode: "years", 
    			minViewMode: "years",
    			endDate: "endYear"
			});
			$('#inputChooseRangeTH').on('change', function() {
			    if ( this.value == 'choosely'){
			        $("#searchrange").hide();
			        $("#searchly").show();
			    }
			    else{
			        $("#searchly").hide();
			        $("#searchrange").show();
			    }
		    });
		    $('#inputChooseSearchlyTH').on('change', function() {
			    if ( this.value == 'day'){
			        $("#calendarViewMonth").hide();
			        $("#calendarViewYear").hide();
			        $("#calendarViewDay").show();
			    }
			    else if ( this.value == 'month'){
			        $("#calendarViewYear").hide();
			        $("#calendarViewDay").hide();
			        $("#calendarViewMonth").show();
			    }
			    else{
			        $("#calendarViewDay").hide();
			        $("#calendarViewMonth").hide();
			        $("#calendarViewYear").show();
			    }
		    });
		});
	</script> 
	</head>
<body class="body">
	<div class="header-at" id="HDAT" style="color: #ffffff;background-color: #222;">
		@include('header.userheaderat')
	</div>
	<div class="row">
		<div class="col-md-1 col-sm-2" style="text-align: center;">
		</div>
		<div class="col-md-10 col-sm-8" style="text-align: center;margin-top:2.5%; margin-bottom:2.5%;">
			<div class="panel-group" style="box-shadow:0 0 15px #000000;">
				<div class="panel panel-primary">
				    <div class="panel-heading text-center">
				    	<b class="panel-title" id="strInfoTH" style="font-size: 140%">ดูรายการธุรกรรมย้อนหลัง</b>
				 	</div>
				    <div class="panel-body">
				    	<div class="dataSearch-heading form-horizontal">
							<div class="container-fluid">
								<div class="col-md-3 col-sm-6 control-label">
						      	     <p class="text-left">
					   		 	 	 	 <b for="inputChooseWashingMachineTH" style="font-size: 120%">หมายเลขเครื่องซักผ้าที่เลือก:</b>
					   		 	 	 </p>
						      	</div>
							    <div class="col-md-3 col-sm-6">
									<select id="inputChooseWashingMachineTH" name="inputChooseWashingMachineTH" class="form-control">
						      	 	    <option value="">ทั้งหมด</option>
										<option value="nb1">เครื่องที่ 1</option>
										<option value="nb2">เครื่องที่ 2</option>
										<option value="nb3">เครื่องที่ 3</option>
										<option value="nb4">เครื่องที่ 4</option>
										<option value="nb5">เครื่องที่ 5</option>
									</select>
						      	</div>
						      	<div class="col-md-1 col-sm-12 control-label">								      		
								</div>
								<!-- <div class="col-md-2 col-sm-6 control-label">
									 <p class="text-left">
					   		 	 	 	 <b for="inputTransactionIDTH" style="font-size: 120%">รหัสธุรกรรม:</b>
					   		 	 	 </p>
								</div> -->
								<div class="col-md-2 col-sm-6 control-label">
									 <p class="text-left">
					   		 	 	 	 <b for="inputChooseRangeTH" style="font-size: 120%">ประเภทการค้นหา:</b>
					   		 	 	 </p>
								</div>
								<!-- <div class="col-md-3 col-sm-6">
									<input id="inputTransactionIDTH" class="form-control" type="text" name="inputTransactionIDTH" placeholder="กรุณาใส่รายการธุรกรรม " maxlength="50">
								</div> -->
								<div class="col-md-3 col-sm-6">
									<select id="inputChooseRangeTH" name="inputChooseRangeTH" class="form-control">
						      	 	    <option value="choosely">เป็นรอบ</option>
										<option value="chooseday">ช่วงเวลา</option>
									</select>
						      	</div>
							</div>
							<br>
							<!-- <div class="container-fluid">
								<div class="col-md-12 col-sm-24 text-left">
								    <input type="radio" name="chooseformat" value="" id="inputViewLy" checked="true"><b style="font-size: 120%"> ดูเป็นรายรอบ</b>
								    <br><br>			
									<input type="radio" name="chooseformat" value="" id="inputTimeRange"><b style="font-size: 120%"> ดูเป็นช่วงเวลา</b>
								</div>
							</div>
							<br> -->
							<div class="container-fluid" id="searchly">
						      	<div class="col-md-3 col-sm-6 control-label">
						      	     <p class="text-left">
					   		 	 	 	 <b for="inputChooseSearchlyTH" style="font-size: 120%">ประเภทรอบที่ต้องการทราบ:</b>
					   		 	 	 </p>
						      	</div>
							    <div class="col-md-3 col-sm-6">
									<select id="inputChooseSearchlyTH" name="inputChooseSearchlyTH" class="form-control">
						      	 	    <option value="day">รายวัน</option>
										<option value="month">รายเดือน</option>
										<option value="year">รายปี</option>
									</select>
						      	</div>
						      	<div class="col-md-1 col-sm-12 control-label">								      		
								</div>
								<div class="visible-sm visible-xs">
					      			<br>
					      		</div>						      	
						     	<div class="col-md-5 col-sm-10" id="calendarViewDay">
					                <div class='input-group date' id='datepickerViewDay'>
					                    <input id="inputSetViewDayTH" class="form-control date-range-filter" placeholder="วัน/เดือน/ปี ค.ศ." type="text" name="inputSetViewDayTH" maxlength="50">
					                    <span class="input-group-addon" id="iconDate1">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
						      	</div>
						      	<div class="col-md-5 col-sm-10" id="calendarViewMonth">
					                <div class='input-group date' id='datepickerViewMonth'>
					                    <input id="inputSetViewMonthTH" class="form-control date-range-filter" placeholder="เดือน/ปี ค.ศ." type="text" name="inputSetViewMonthTH" maxlength="50">
					                    <span class="input-group-addon" id="iconDate1">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
						      	</div>
						      	<div class="col-md-5 col-sm-10" id="calendarViewYear">
					                <div class='input-group date' id='datepickerViewYear'>
					                    <input id="inputSetViewYearTH" class="form-control date-range-filter" placeholder="ปี ค.ศ." type="text" name="inputSetViewYearTH" maxlength="50">
					                    <span class="input-group-addon" id="iconDate1">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
						      	</div>
						      	<script>$("#calendarViewMonth").hide();</script>
						      	<script>$("#calendarViewYear").hide();</script>
							</div>
							<div class="container-fluid" id="searchrange">
								<div class="col-md-3 col-sm-6 control-label">
						      	     <p class="text-left">
					   		 	 	 	 <b for="inputSetStartDateTH" style="font-size: 120%">วันที่เริ่มการค้นหา:</b>
					   		 	 	 </p>
						      	</div>
						     	<div class="col-md-3 col-sm-6">
					                <div class='input-group date' id='datepickerStartDate'>
					                    <input id="inputSetStartDateTH" class="form-control date-range-filter" placeholder="วัน/เดือน/ปี ค.ศ." type="text" name="inputSetStartDateTH" maxlength="50">
					                    <span class="input-group-addon" id="iconDate1">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
						      	</div>
						      	<div class="col-md-1 col-sm-12 control-label">
								</div>
						      	<div class="col-md-2 col-sm-6 control-label">
						      	     <p class="text-left">
					   		 	 	 	 <b for="inputSetEndDateTH" style="font-size: 120%">วันที่สิ้นสุดการค้นหา:</b>
					   		 	 	 </p>
						      	</div>
						     	<div class="col-md-3 col-sm-6">
					                <div class='input-group date' id='datepickerEndDate'>
					                    <input id="inputSetEndDateTH" class="form-control date-range-filter" placeholder="วัน/เดือน/ปี ค.ศ." type="text" name="inputSetEndDateTH" maxlength="50">
					                    <span class="input-group-addon" id="iconDate2">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
						      	</div>
						      	<div class="col-md-12 col-xs-12 text-center">	
						      		 <br>				     		 
							     	 <button type="button" class="btn bg-black" id="btnSearchTransactions" name="btnSearchTransactions" onclick=""><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp; ค้นหารายการธุรกรรม</button>&nbsp;
							     	 <button type="button" class="btn bg-black" id="btnDefaultSearch" name="btnDefaultSearch" onclick=""><span class="glyphicon glyphicon-repeat"></span>&nbsp;&nbsp; กลับมาค่าเริ่มต้น</button>&nbsp;
						     	</div>
							</div>
							<script>$("#searchrange").hide();</script>
							<br>
							<div class="row container-fluid">
								<div class="col-xs-12 col-sm-12 text-center">
						     		<table id="THTable" class="table table-responsive table-bordered dt-responsive nowrap table-hover display" style="width: 100%;">
							     		<thead>
							     			 <tr>
							     			 	<th class="text-center">ลำดับที่</th>
								                <th class="text-center">รหัสธุรกรรม</th>
								                <th class="text-center">หมายเลขเครื่องซักผ้า</th>		               
								                <th class="text-center">จำนวนเงินที่ชำระ (บาท)</th>
								                <th class="text-center">วันที่ทำธุรกรรม (วัน/เดือน/ปี ค.ศ.)</th>
								                <th class="text-center">เวลา (น.)</th>
								             </tr>
								         </thead>
								         <tbody>											            
								            <tr>
								            	<td>1</td>
								                <td>1423232656</td>
								                <td>2</td>
								                <td>30</td>
								                <td>17/05/2017</td>
								                <td>10:41</td>
								            </tr>
								            <tr>
								            	<td>2</td>
								                <td>1524545489</td>
								                <td>1</td>
								                <td>30</td>
								                <td>17/05/2017</td>
								                <td>10:41</td>
								            </tr>
								            <tr>
								            	<td>3</td>
								                <td>1445415623</td>
								                <td>3</td>
								                <td>20</td>
								                <td>17/05/2017</td>
								                <td>12:43</td>
								            </tr>
								            <tr>
								            	<td>4</td>
								                <td>1564623622</td>
								                <td>5</td>
								                <td>30</td>
								                <td>18/05/2017</td>
								                <td>13:31</td>
								            </tr>
								            <tr>
								            	<td>5</td>
								                <td>1578532312</td>
								                <td>1</td>
								                <td>30</td>
								                <td>18/05/2017</td>
								                <td>13:34</td>
								            </tr>
								            <tr>
								            	<td>6</td>
								                <td>1678732314</td>
								                <td>2</td>
								                <td>20</td>
								                <td>18/05/2017</td>
								                <td>13:52</td>
								            </tr>
								            <tr>
								            	<td>7</td>
								                <td>1671245745</td>
								                <td>5</td>
								                <td>20</td>
								                <td>18/05/2017</td>
								                <td>18:14</td>
								            </tr>
								            <tr>
								            	<td>8</td>
								                <td>2115656548</td>
								                <td>4</td>
								                <td>20</td>
								                <td>19/05/2017</td>
								                <td>11:11</td>
								            </tr>
								            <tr>
								            	<td>9</td>
								                <td>2125612778</td>
								                <td>3</td>
								                <td>30</td>
								                <td>19/05/2017</td>
								                <td>12:58</td>
								            </tr>
								            <tr>
								            	<td>10</td>
								                <td>2135678456</td>
								                <td>2</td>
								                <td>20</td>
								                <td>12/05/2017</td>
								                <td>15:16</td>
								            </tr>
								         </tbody>
								         <tfoot>
								         	 <tr>
								         	 	<th class="text-center">ลำดับที่</th>
								                <th class="text-center">รหัสธุรกรรม</th>
								                <th class="text-center">หมายเลขเครื่องซักผ้า</th>		               
								                <th class="text-center">จำนวนเงินที่ชำระ (บาท)</th>
								                <th class="text-center">วันที่ทำธุรกรรม (วัน/เดือน/ปี ค.ศ.)</th>
								                <th class="text-center">เวลา (น.)</th>
								             </tr>
								         </tfoot>
						     		</table>
						        </div>
							</div>
						</div>
				    </div>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-2" style="text-align: center;">
		</div>
	</div>
	<div class="footer-bottom" id="ftbHM" style="color: #ffffff;background-color: #222;">
		@include('header.userfooter')
	</div>
</body>
<html>
