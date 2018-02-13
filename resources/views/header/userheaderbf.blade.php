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
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarheaderbf">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			    </button>
		      	<a class="navbar-brand"></a>
		    </div>
		    <div class="collapse navbar-collapse" id="navbarheaderbf" style="overflow-y: hidden;">
			    <ul class="nav navbar-nav">
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			      <li class=""><a id="gotologin" href="{{ URL::to('/login') }}"><span class="glyphicon glyphicon-log-in"></span>&nbsp; ลงชื่อเข้าใช้</a></li>
			      <li class=""><a id="gotoregister" href="{{ URL::to('/register') }}"><span class="glyphicon glyphicon-user"></span>&nbsp; ลงทะเบียนผู้ใช้</a></li>
			      <!-- <li class=""><a id="gotoforgotpassword" href="{{ URL::to('/forgotpassword') }}"><span class="glyphicon glyphicon-question-sign"></span>&nbsp; ลืมรหัสผ่าน</a></li> -->
			      <!-- <li class=""><a id="gotochangepassword" href="{{ URL::to('/changepassword') }}"><span class="glyphicon glyphicon-cog"></span>&nbsp; เปลี่ยนรหัสผ่าน</a></li> -->
			    </ul>
			</div>
		</div>
  	</div>
</header>
