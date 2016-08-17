<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Wateja | Login</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="WatejaDB System for your customers in your business area">
        <meta name="keywords" content="">
        <meta name="author" content="Joram Kimata">

        <!-- Base Css Files -->
        <link href="{{url('assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet" />
        <link href="{{url('assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{url('assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{url('assets/libs/fontello/css/fontello.css')}}" rel="stylesheet" />
        <link href="{{url('assets/libs/animate-css/animate.min.css')}}" rel="stylesheet" />
        <link href="{{url('assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet" />
        <link href="{{url('assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" /> 
        <link href="{{url('assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet" /> 
        <link href="{{url('assets/libs/pace/pace.css')}}" rel="stylesheet" />
        <link href="{{url('assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" />
        <link href="{{url('assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
        <link href="{{url('assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="{{url('assets/libs/prettify/github.css')}}" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="{{url('assets/css/style-responsive.css')}}" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body class="fixed-left login-page">
        	
	<!-- Begin page -->
	<div class="container">
		<div class="full-content-center">
			<p class="text-center"></p>
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					<img src="{{url('wateja/images/logo.png')}}" class="img-circle not-logged-avatar">
					<form role="form" action="{{route('app.doLogin')}}" method="POST">
						@include('partials.files._error')
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" required name="username" class="form-control text-input" placeholder="Username">
						</div>
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<input type="password" required name="password" class="form-control text-input" placeholder="********">
						</div>
						
						<div class="row">
							<div class="col-sm-12">
							<button type="submit" class="btn btn-success btn-block">LOGIN</button>
							</div>
							
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
	<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{url('assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{url('assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{url('assets/libs/jquery-detectmobile/detect.js')}}"></script>
	<script src="{{url('assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
	<script src="{{url('assets/libs/ios7-switch/ios7.switch.js')}}"></script>
	<script src="{{url('assets/libs/fastclick/fastclick.js')}}"></script>
	<script src="{{url('assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
	<script src="{{url('assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{url('assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
	<script src="{{url('assets/libs/nifty-modal/js/classie.js')}}"></script>
	<script src="{{url('assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
	<script src="{{url('assets/libs/sortable/sortable.min.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap-select2/select2.min.js')}}"></script>
	<script src="{{url('assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
	<script src="{{url('assets/libs/pace/pace.min.js')}}"></script>
	<script src="{{url('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{url('assets/libs/jquery-icheck/icheck.min.js')}}"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="{{url('assets/libs/prettify/prettify.js')}}"></script>

	<script src="{{url('assets/js/init.js')}}"></script>
	</body>
</html>