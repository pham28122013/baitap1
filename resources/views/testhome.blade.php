<html>
<head>
    <title> Register</title>
       <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('pages/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('pages/css/style1.css')}}">
</head>
<body>
   	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">PHP12</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="test">Trang chủ</a></li>
		        <li><a href="#">Khoá học</a></li>
		        <li><a href="#">Môn học</a></li>
		        <li><a href="contact">Giáo viên</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#" data-toggle="modal" data-target="#modalLogin">Đăng nhập</a></li>
		        <li><a href="#" data-toggle="modal" data-target="#modalRegister">Đăng ký</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
    <div class="container-fluid">
            @yield('content')
        </div>
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content col-sm-12">
	      <div class="modal-header col-sm-12">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
	      </div>
	      <div class="modal-body col-sm-12">
	        <form class="form-horizontal" action="#" method="post">
	        	<div class="form-group">
	        		<label>Tên đăng nhập</label>
	        		<input id="login-username" class="form-control">
	        		<p id="login-username-error" class="text-danger"></p>
	        	</div>
	        	<div class="form-group">
	        		<label>Mật khẩu</label>
	        		<input id="login-password" type="password" class="form-control">
	        		<p id="login-password-error" class="text-danger"></p>
	        	</div>
	        	<div class="form-group">
	        		<input class="btn btn-info" value="Đăng nhập" id="btn-login" type="submit">
	        	</div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content col-sm-12">
	      <div class="modal-header col-sm-12">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Đăng ký</h4>
	      </div>
	      <div class="modal-body col-sm-12">
	        <form class="form-horizontal" action="#" method="post">
	        	<div class="form-group">
	        		<label>Tên đăng nhập</label>
	        		<input id="reg-username" class="form-control">
	        		<p id="reg-username-error" class="text-danger"></p>
	        	</div>
	        	<div class="form-group">
	        		<label>Mật khẩu</label>
	        		<input id="reg-password" type="password" class="form-control">
	        		<p id="reg-password-error" class="text-danger"></p>
	        	</div>
	        	<div class="form-group">
	        		<label>Nhập mật khẩu</label>
	        		<input id="reg-rePassword" type="password" class="form-control">
	        		<p id="reg-rePassword-error" class="text-danger"></p>
	        	</div>
	        	<div class="form-group">
	        		<input class="btn btn-danger" value="Đăng nhập" id="btn-reg" type="submit">
	        	</div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
 <script src="{{asset('pages/js/jquery.js')}}"></script>
	<script src="{{ asset('pages/js/confix.js')}}"></script>
	<script src="{{ asset('pages/js/bootstrap.min.js')}}"></script>
	
</body>
</html>