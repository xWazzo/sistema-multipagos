	</div><!-- end page-container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== Table Manage Responsive ================== -->
	<script src="assets/plugins/DataTables/js/jquery.dataTables.js"></script>
	<script src="assets/plugins/DataTables/js/dataTables.responsive.js"></script>
	<script src="assets/js/table-manage-responsive.demo.js"></script>
	<!-- ================== Table Manage Responsive ================== -->

	<!-- ================== Index ================== -->
	<script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
	<script src="assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>

	<script src="assets/js/dashboard.js"></script>
	<!-- <script src="assets/js/dashboard-v2.js"></script> -->
	<!-- ================== Index ================== -->

	<!-- ================== MAP ================== -->
	<script src="assets/js/map-vector.demo.min.js"></script>
	<!-- ================== MAP ================== -->
	<script src="assets/plugins/morris/raphael.min.js"></script>
	<script src="assets/plugins/morris/morris.js"></script>
	<script src="assets/js/chart-morris.demo.min.js"></script>

  <!-- ================== Form plugins JS ================== -->
  <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script src="assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
  <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

  <script src="assets/plugins/masked-input/masked-input.min.js"></script>
  <script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="assets/plugins/password-indicator/js/password-indicator.js"></script>
  <script src="assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>

  <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>

  <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
  <script src="assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>

    <script src="assets/plugins/bootstrap-daterangepicker/moment.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/select2/dist/js/select2.min.js"></script>
  <script src="assets/js/form-plugins.demo.min.js"></script>
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageResponsive.init();
			MapVector.init();
			Dashboard.init();
      FormPlugins.init();
		});

    $(window).resize(function(){
      drawMaterial();
    });
	</script>
</body>
</html>
