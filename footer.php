</div>
<script type="text/javascript" src="vendor/jquery.min.js"></script>
<script type="text/javascript" src="js/highcharts.js"></script>
<script type="text/javascript" src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendor/popper.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="vendor/datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript">
	//Datatables
	$(document).ready(function(){
		var t = $('.tableOwner').DataTable({
			"order": [[1, 'asc']]
		});
		t.on('order.dt search.dt', function(){
			t.column(0, {search:'applied', order:'applied'}).nodes().each(function (cell, i){
				cell.innerHTML = i+1;
			});
		}).draw();
	
	
	// datepicker
	$('.tanggal').datepicker({
			format: "yyyy-mm-dd",
			autoclose:true
		});
	});

	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
		'use strict';
		window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
	}, false);
	})();				
</script>
</body>
</html>