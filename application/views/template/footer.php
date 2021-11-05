    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="<?= base_url();?>assets/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
    	// $('select').select2();
    	$('#authors').select2({
	    	minimumInputLength: 2,
	    	placeholder: "Select Author(s)",
		 	 ajax: {
		    url: '<?=base_url();?>home/searchAuthors',
		    data: function (params) {
		      var query = {
		        search: params.term,
		      }
		      // Query parameters will be ?search=[term]&page=[page]
		      return query;
		    }
		  }
		});

		$('#categories').select2({
	    	minimumInputLength: 2,
	    	placeholder: "Select Category(s)",
		  	ajax: {
		    url: '<?=base_url();?>home/searchCategories',
		    data: function (params) {
		      var query = {
		        search: params.term,
		      }
		      // Query parameters will be ?search=[term]&page=[page]
		      return query;
		    }
		  }
		});

    </script>
  </body>
</html>
