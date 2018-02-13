<!Doctype html>
<html>
	<head>
	<title>รายการธุรกรรมที่เกิดขึ้นล่าสุด</title>
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
	        padding-top: 100px;
	    }
	   
	</style>  
	<script>
		$(document).ready(function(){
			$('#RTTable').dataTable({
			 "autoWidth": false,
			 "searching": false,
			 "bProcessing": true,
			 "serverSide": false,
		     "iDisplayLength": 10,
	         "bDestroy": true,
	         "responsive": true
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
				    	<b class="panel-title" id="strInfoRT" style="font-size: 140%">รายการการทำธุรกรรมที่เกิดขึ้นล่าสุด</b>
				 	</div>
				    <div class="panel-body">
				    	<div class="dataSearch-heading form-horizontal">
				    		<div class="container-fluid">
								<div class="col-xs-12 col-sm-12 text-center">
									<p class="text-center">
					   		 	 	 	 <b for="inputTransactionIDRT" style="font-size: 115%;color: red">คุณสามารถดูรายการธุรกรรมแบบ real-time ที่เกิดขึ้นของเครื่องซักผ้าอัตโนมัติทั้งหมดในจุดบริการนี้</b>
					   		 	 	 </p>
								</div>
							</div>
							<div class="row container-fluid">
								<div class="col-xs-12 col-sm-12 text-center">
						     		<table id="RTTable" class="table table-responsive table-bordered dt-responsive nowrap table-hover display" style="width: 100%;">
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
