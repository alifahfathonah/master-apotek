<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if($Level=="Master" OR $Level=="Pemilik" OR $Level="Apoteker") : ?>
	<section class="content-header">
		<h1><?= $Title ?></h1>
		<ol class="breadcrumb">
			<li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li> <?= $Nav ?></li>
			<li class="active"> <?= $Title ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-lg-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<i class="fa fa-wheelchair"></i>
						<h3 class="box-title">List <?= $Title ?></h3>
					</div>
					<div class="box-body">
						<table id="dtTable" class="table table-striped table-bordered">
							<thead>
								<th>No.</th>
								<th>Tanggal</th>
								<th>Kode Surat</th>
								<th>Faktur</th>
								<th>Kirim</th>
								<th>Barang</th>
								<th>Pabrik</th>
								<th>PBF</th>
								<th>Qty</th>
								<th>Harga</th>
								<th>Total</th>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="<?= base_url('assets/jquery/jquery.inputmask.js') ?>"></script>
	<script src="<?= base_url('assets/jquery/jquery.inputmask.date.extensions.js') ?>"></script>
	<script src="<?= base_url('assets/jquery/jquery.inputmask.extensions.js') ?>"></script>
	<script>
		$(document).ready(function(){
			var dtTable = $('#dtTable').DataTable({
				"processing": true,
				"ajax": {
					"url": "<?= base_url('penerimaan/list_report_penerimaan_barang') ?>",
					"type": "POST"
				},
				"autoWidth": false,
				"info": true,
				"ordering": true,
				"paging": true,
				"pageLength": 5,
				"lengthChange": true,
				"searching": true
			});
		});
		$('#tgl_awal').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
	    $('#tgl_akhir').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
	</script>
<?php endif ?>