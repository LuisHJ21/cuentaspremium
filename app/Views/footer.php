</main>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url() ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url() ?>/js/plugins/pace.min.js"></script>
    
	<!-- datatable  -->
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>

	<script>
		$(document).ready( function () {
			$('#datatable').DataTable();
		} );
	</script>
    
  </body>
</html>