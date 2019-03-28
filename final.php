<?php 
include "header.php";
include "dbconnect.php";
include "functions.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Final Invoice</title>
<script type="text/javascript" src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.min.js"></script>
</head>
<style>
.hr
{
  border: 1px solid black;
  width: 1480px;
  margin-left: -1050px;
  
  opacity: 0.1;
}

</style>
<body>
	<div style="float: right;">
		<button style="border-radius: 50%;background-color: Transparent; border: 0px;"><img src="pdf.ico" id="cmd" width="50" height="50"></button>
	</div>
	<script>
         	 	$('#cmd').click(function() {
				var element = document.getElementById('element-to-print');
				html2pdf(element, {
				  margin:       0,
				  filename:     'trackingReport.pdf',
				  image:        { type: 'jpeg', quality: 0.98 },
				  html2canvas:  { dpi: 192, letterRendering: true },
				  jsPDF:        { unit: 'in', format: 'a3', orientation: 'portrait' }
				});
				});

				</script>
<div class="container" id="element-to-print"><br><br>
	<h2>TNE Trackers</h2><br><br>
	<div class="col-md-3" style="margin-left: 50%;">
		<label>Invoice</label>
		<input type="text" class="form-control" style="border: 0px;">
		<label>Invoice Date</label>
		<input type="text" class="form-control" style="border: 0px;">
	</div><br><br>
	<div class="col-md-12">
	<div class="col-md-3" style="margin-top: -100px;">
		<label>Client Name</label>
		<input type="text" class="form-control" style="border: 0px;">
	</div>
	<div class="col-md-3">
		<label>Project Name</label>
		<input type="text" class="form-control" style="border: 0px;">
	</div>
	</div>
	<div class="col-md-6" style="margin-top: 150px;">
		<label>Description</label><br>
		<textarea style="border: 0px; width: 100%;"></textarea>
	</div>
	<div class="col-xs-2" style="margin-left: 50%; margin-top: -80px">
		<label>Expense Name</label>
		<input type="text" class="form-control" style="border: 0px;">
	</div>
	<div class="col-xs-2" style="margin-left: 65%; margin-top: -75px">
		<label>Expense Amount</label>
		<input type="text" class="form-control" style="border: 0px;">
	</div>
	<div class="col-md-6" style="margin-top: 30px;">
		<!-- <label>Description</label> -->
		<textarea style="border: 0px; width: 100%;"></textarea>
	</div>
	<div class="col-xs-2" style="margin-left: 50%; margin-top: -80px">
		<label>Expense Name</label>
		<input type="text" class="form-control" style="border: 0px;">
	</div>
	<div class="col-xs-2" style="margin-left: 65%; margin-top: -75px">
		<label>Expense Amount</label>
		<input type="text" class="form-control" style="border: 0px;">
	</div>
</div>
</body>
</html>