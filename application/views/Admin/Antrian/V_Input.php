<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users "></i> <span>Atur Pegawai</span></a></li>
				<li><a href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-bookmark "></i> <span>Atur Layanan</span></a></li>
				<li><a class="active" href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atur Jadwal</span></a></li>
				<li><a href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atur Akun Pengguna</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Input Jadwal</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('Jadwal/insertJadwal'); ?>" method="POST">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">
								

								<div class="form-group">
									<label for="nama_lengkap">Nama Lengkap</label>
									<input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" required="">
								</div>

								<div class="form-group">
									<label for="Umur">Umur</label>
									<input id="Umur" name="bagian" type="text" class="form-control" placeholder="Bagian" required="">
								</div>

								<div class="form-group">
									<label for="bagian">Berat</label>
									<input id="bagian" name="bagian" type="text" class="form-control" placeholder="Bagian" required="">
								</div>

								<div class="form-group">
									<label for="hari">Jenis Kelamin</label>
									<select id="hari" name="hari"  class="form-control">
										<option value="Laki - Laki">Laki - Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label for="bagian">Alamat</label>
									<input id="bagian" name="bagian" type="text" class="form-control" placeholder="Bagian" required="">
								</div>

								<div class="form-group">
									<label for="bagian">Tanggal Besuk</label>
									<input id="bagian" name="bagian" type="text" class="form-control" placeholder="Bagian" required="">
								</div>

								<div class="form-group">
									<label for="id_dokter">Dokter</label>
									<select id="id_dokter" name="id_dokter"  class="form-control">
									<?php 
									if($dokter){
									foreach ($dokter as $value) { ?>
										<option value="<?php echo $value['id_dok']; ?>"><?php echo $value['nama_dokter']; ?></option>
									<?php }} ?>
									</select>
								</div>
								
							</div>
							<div style="padding: 20px;" class="col-md-12 text-center">
								<input class="btn btn-success btn-lg" type="submit" value="Input">
							</div>
						</div>
					</div>
					<!-- END INPUTS -->
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
