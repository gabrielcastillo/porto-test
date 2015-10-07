<!-- end: page -->
</section>
</div>
</section>
<!-- Vendor -->
<script src="<?php echo base_url('public/vendor/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/jquery-browser-mobile/jquery.browser.mobile.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/bootstrap/js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/nanoscroller/nanoscroller.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/magnific-popup/magnific-popup.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/jquery-placeholder/jquery.placeholder.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js'); ?>"></script>
<?php if( $this->uri->segment(1) == 'login' && $this->uri->segment(2) == '' ): ?>
<!-- Specific Page Vendor -->
<script src="<?php echo base_url('public/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/jquery-appear/jquery.appear.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/bootstrap-multiselect/bootstrap-multiselect.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/jquery-easypiechart/jquery.easypiechart.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/flot/jquery.flot.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/flot-tooltip/jquery.flot.tooltip.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/flot/jquery.flot.pie.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/flot/jquery.flot.categories.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/flot/jquery.flot.resize.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/jquery-sparkline/jquery.sparkline.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/raphael/raphael.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/morris/morris.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/gauge/gauge.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/snap-svg/snap.svg.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/liquid-meter/liquid.meter.js'); ?>"></script>
<?php endif; ?>
<?php if( $this->uri->segment(2) == 'calendar' ): ?>
<script src="<?php echo base_url('public/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/fullcalendar/lib/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/fullcalendar/fullcalendar.js'); ?>"></script>
<script src="/public/javascripts/pages/examples.calendar.js"></script>
<?php endif; ?>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url('public/javascripts/theme.js'); ?>"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url('public/javascripts/theme.custom.js'); ?>"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url('public/javascripts/theme.init.js'); ?>"></script>

<!-- Examples -->
<script src="/public/javascripts/dashboard/examples.dashboard.js"></script>

</body>