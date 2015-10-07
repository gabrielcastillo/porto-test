<section class="body">
	<?php $this->load->view('inc/header', TRUE); ?>
	<div class="inner-wrapper">
		<?php $this->load->view('inc/sidebar', TRUE); ?>
		<section role="main" class="content-body">
			<header class="page-header">
				<h2><?php echo current_page(TRUE); ?></h2>
			</header>
			<!-- start: page -->
				<?php current_page(); ?>
			<!-- end: page -->
		</section>
	</div>
</section>