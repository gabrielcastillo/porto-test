<section class="body">
	<?php $this->load->view('inc/header', TRUE); ?>
	<div class="inner-wrapper">
		<?php $this->load->view('inc/sidebar', TRUE); ?>
		<section role="main" class="content-body">
			<header class="page-header">
				<h2><?php echo ucwords($this->uri->segment(1)); ?></h2>
			</header>
			<section class="panel">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
							<div id="calendar" data-caltype="<?php echo $this->uri->segment(3); ?>"></div>
						</div>
					</div>
				</div>
			</section>
		</section>
	</div>
</section>