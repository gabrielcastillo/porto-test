<!doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">
	<meta name="author" content="Gabriel Castillo">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?php echo $sitename; ?></title>
	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url('public/vendor/bootstrap/css/bootstrap.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('public/vendor/font-awesome/css/font-awesome.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('public/vendor/magnific-popup/magnific-popup.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('public/vendor/bootstrap-datepicker/css/datepicker3.css'); ?>" />
	<?php if( $this->uri->segment(1) == 'login' && $this->uri->segment(2) == '' ): ?>
		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url('public/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('public/vendor/bootstrap-multiselect/bootstrap-multiselect.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('public/vendor/morris/morris.css'); ?>" />
	<?php endif; ?>
	<?php if( $this->uri->segment(2) == 'calendar'): ?>
		<link rel="stylesheet" href="<?php echo base_url('public/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('public/vendor/fullcalendar/fullcalendar.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('public/vendor/fullcalendar/fullcalendar.print.css'); ?>" media="print" />
	<?php endif; ?>
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url('public/stylesheets/theme.css'); ?>" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?php echo base_url('public/stylesheets/skins/default.css'); ?>" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url('public/stylesheets/theme-custom.css'); ?>">

	<!-- Head Libs -->
	<script src="<?php echo base_url('public/vendor/modernizr/modernizr.js'); ?>"></script>
</head>
<body>
<section class="body-sign">

	<div class="center-sign">
		<a href="/" class="logo pull-left">
			<img src="<?php echo base_url('public/images/logo.png'); ?>" height="54" alt="Porto Admin" />
		</a>

		<div class="panel panel-sign">
			<div class="panel-title-sign mt-xl text-right">
				<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Reset Password</h2>
			</div>
			<div class="panel-body">
				<?php echo $this->session->flashdata('message'); ?>
				<?php if( validation_errors() ): ?>
				<?php echo alert_message('danger', validation_errors()); ?>
				<?php endif; ?>
				<?php echo form_open('login/reset'); ?>
					<div class="form-group mb-lg">
						<label>Email</label>
						<div class="input-group input-group-icon">
							<input type="text" name="email" class="form-control input-lg" value="<?php echo set_value('email'); ?>" autocomplete="Off" autofocus="true"/>
							<span class="input-group-addon">
								<span class="icon icon-lg">
									<i class="fa fa-user"></i>
								</span>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-8 text-right">
							<button type="submit" class="btn btn-primary hidden-xs">Reset</button>
							<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Reset</button>
						</div>
					</div>

					<span class="mt-lg mb-lg line-thru text-center text-uppercase">
						<span>or</span>
					</span>

				<p class="text-center">Go back to <?php echo anchor('login', 'Login'); ?>!
			<?php echo form_close(); ?>
			</div>
		</div>

		<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All Rights Reserved.</p>
	</div>
</section>
<!-- end: page -->

<!-- Vendor -->
<script src="<?php echo base_url('public/vendor/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/jquery-browser-mobile/jquery.browser.mobile.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/bootstrap/js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/nanoscroller/nanoscroller.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/magnific-popup/magnific-popup.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/jquery-placeholder/jquery.placeholder.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js'); ?>"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url('public/javascripts/theme.js'); ?>"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url('public/javascripts/theme.custom.js'); ?>"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url('public/javascripts/theme.init.js'); ?>"></script>


</body>

