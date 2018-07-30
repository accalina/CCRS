<!-- main content start-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/wolflib/') ?>jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/wolflib/') ?>buttons.dataTables.min.css">

<script type="text/javascript" src="<?php echo base_url('assets/wolflib/') ?>jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wolflib/') ?>dataTables.buttons.min.js "></script>

<script type="text/javascript" src="<?php echo base_url('assets/wolflib/') ?>buttons.flash.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wolflib/') ?>jszip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wolflib/') ?>pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wolflib/') ?>vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wolflib/') ?>buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wolflib/') ?>buttons.print.min.js"></script>

<style>
	table.table-bordered > thead > tr > th{
		border:0.2px solid black;
	}

	table.table-bordered > tbody > tr > td{
		border:1px solid black;
	}
	
	#page-wrapper {
		background-image: url('<?php echo base_url('assets/img/wall.jpg'); ?>');
	}

	#style-2 {
		
	}
</style>


<div id="page-wrapper">
	<div class="main-page">
		<h2 class="title1">
			<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Buat laporan baru</button>
		</h2>

		<div class="blank-page widget-shadow scroll col-sm-12" id="style-2 div1" style="background-color: rgba(255, 255, 255, 0.8);">

			<!-- Insert Data -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
				
				<div class="modal-content">
					<div class="modal-header bg-success">
						<button type="button" class="close color-white" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Buat Laporan Baru</h4>
					</div>
					<div class="modal-body">
						
						<form action="">
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Zone</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Type</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Subtype</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Catalog</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Extract</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Status</label>
								<select name="" id="" class="form-control">
									<option value="Sesuai">Data Sesuai</optio>
									<option value="Defact">Data Tidak Sesuai</option>
								</select>
							</div>
							<center>
								<button class="btn btn-primary" type="button">Simpan</button>
							</center>
						</form>

					</div>
					<!-- <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div> -->
				</div>
				
				</div>
			</div>
			
			<!-- Tabel untuk reporting -->
			<table id="tblreport" class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Zone</th>
						<th>Type</th>
						<th>Subtype</th>
						<th>Catalog</th>
						<th>Extract</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Data 1</td>
						<td>Data 1</td>
						<td>Data 1</td>
						<td>Data 1</td>
						<td>Data 1</td>
						<td>Data 1</td>
						<td>Data 1</td>
					</tr>
					<tr>
						<td>Data 2</td>
						<td>Data 2</td>
						<td>Data 2</td>
						<td>Data 2</td>
						<td>Data 2</td>
						<td>Data 2</td>
						<td>Data 2</td>
					</tr>
					<tr>
						<td>Data 3</td>
						<td>Data 3</td>
						<td>Data 3</td>
						<td>Data 3</td>
						<td>Data 3</td>
						<td>Data 3</td>
						<td>Data 3</td>
					</tr>
				</tbody>
			</table>

			<script>
				$('#tblreport').dataTable({
					"lengthChange": false,
					dom: 'Bfrtip',
						buttons: [
							'copy', 'csv', 'excel', 'pdf', 'print'
						]
				});
			</script>

		</div>
		
	</div>
</div>
		