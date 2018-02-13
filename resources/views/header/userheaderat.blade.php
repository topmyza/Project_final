<script>
	$(document).ready(function() {
	  	$('li.active').removeClass('active');
	  	$('a[href$="' + location.pathname.match(/[^\\/]+$/)[0] + '"]').closest('li').addClass('active'); 
	});
</script>

<header class="navbar navbar-inverse navbar-static-top bg-primary">
	<div class="container-fluid" style="top: 0px;">
	  	<div class="col-md-12 col-sm-24">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarheaderat">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			    </button>
		        <a class="navbar-brand">example@mail.com</a>
		    </div>
		    <div class="collapse navbar-collapse" id="navbarheaderat" style="overflow-y: hidden;">
			    <ul class="nav navbar-nav">
			      	<li class=""><a id="gotoHome" href="{{ URL::to('/home') }}" on><span class="glyphicon glyphicon-home"></span>&nbsp; บัญชีของคุณ</a></li>
			      	<li class=""><a id="gotoViewRecentTransactions" href="{{ URL::to('/view-recent-transactions') }}" on><span class="glyphicon glyphicon-th-list"></span>&nbsp; ดูรายการธุรกรรมที่เกิดขึ้นล่าสุด</a></li>
			      	<li class=""><a id="gotoViewTransactionHistory" href="{{ URL::to('/view-transaction-history') }}"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; ดูประวัติรายการธุรกรรม</a></li>
			      	<li class=""><a id="gotoCheckStatusWM" href="{{ URL::to('/view-status-washing-machine') }}"><span class="glyphicon glyphicon-stats"></span>&nbsp; ดูสถานะเครื่องซักผ้า</a></li>
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			      <li class=""><a id="gotologin" href="{{ URL::to('/login') }}" on><span class="glyphicon glyphicon-log-out"></span>&nbsp; ลงชื่อออกจากระบบ</a></li>
			    </ul>
			</div>
		</div>
	</div>
</header>