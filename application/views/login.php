<section class="body-sign">
	<div class="center-sign">
		<a href="/" class="logo pull-left">
			<img src="<?php echo base_url('public/images/logo.png'); ?>" height="54" alt="Porto Admin" />
		</a>

		<div class="panel panel-sign">
			<div class="panel-title-sign mt-xl text-right">
				<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
			</div>
			<div class="panel-body">
				<?php echo $this->session->flashdata('message'); ?>
				<?php if( validation_errors() ): ?>
					<div class="alert alert-danger">
						<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
						<?php echo validation_errors(); ?>
					</div>
				<?php endif; ?>
				<?php echo form_open('login'); ?>
					<div class="form-group mb-lg">
						<label>Email</label>
						<div class="input-group input-group-icon">
							<input name="email" type="text" class="form-control input-lg" value="<?php echo set_value('email', $this->session->userdata('email')); ?>" autofocus="TRUE" autocomplete="Off"/>
							<span class="input-group-addon">
								<span class="icon icon-lg">
									<i class="fa fa-user"></i>
								</span>
							</span>
						</div>
					</div>

					<div class="form-group mb-lg">
						<div class="clearfix">
							<label class="pull-left">Password</label>
						</div>
						<div class="input-group input-group-icon">
							<input type="password" name="password" class="form-control input-lg" />
							<span class="input-group-addon">
								<span class="icon icon-lg">
									<i class="fa fa-lock"></i>
								</span>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4 col-sm-offset-8 text-right">
							<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
							<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
						</div>
					</div>

					<span class="mt-lg mb-lg line-thru text-center text-uppercase">
						<span>or</span>
					</span>

					<p class="text-center">Don't remember your password? <?php echo anchor('login/reset', 'Forgot Password'); ?>

				<?php echo form_close(); ?>
			</div>
		</div>

		<p class="text-center text-muted mt-md mb-md">&copy; Copyright <?php echo date('Y'); ?>. All Rights Reserved.</p>
	</div>
</section>
<!-- end: page -->


