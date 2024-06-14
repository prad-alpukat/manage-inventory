<?php
$struk  = new lsp();
$id = $_GET['id'];
$data   = $struk->edit("transaksi", "kd_transaksi", $id);
$total  = $struk->selectSumWhere("transaksi", "sub_total", "kd_transaksi='$id'");
$dataDetail = $struk->edit("detailTransaksi", "kd_transaksi", $id);
$jumlah_barang = $struk->selectSumWhere("transaksi", "jumlah", "kd_transaksi='$id'");
$nama_ketua = $_GET['nama_ketua'];
?>
<style>
	.col-sm-8 {
		background: white;
		padding: 20px;
	}

	@media print {
		table {
			align-content: center;
		}

		.ds {
			display: none;
		}

		.card {
			box-shadow: none;
			border: none;
		}

		.hd {
			display: none;
		}
	}
</style>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							<th align="left" valign="middle" width="60">
								<img width="40%" height="40%" src="images\icon\logo_bps3.png" margin-left="50%" />
							</th>
						</div>
						<div class="card-body">
							<p class="display-1 fw-bold text-center"><?= $nama_ketua ?></p>
							<p align="center">Permintaan Barang Persediaan</p>
							<p align="center">Nomor : _________________________</p>
							<br>
							<p>Dari :</p>
							<table class="table table-striped table-bordered" width="80%">
								<tr>
									<td>Kode Antrian</td>
									<td>Nama Barang</td>
									<td>Harga Satuan</td>
									<td>Jumlah</td>
									<td>Sub Total</td>
								</tr>
								<?php foreach ($dataDetail as $dd) : ?>
									<tr>
										<td><?= $dd['kd_pretransaksi'] ?></td>
										<td><?= $dd['nama_barang'] ?></td>
										<td><?= $dd['harga_barang'] ?></td>
										<td><?= $dd['jumlah'] ?></td>
										<td><?= "Rp." . number_format($dd['sub_total']) . ",-" ?></td>
									</tr>
								<?php endforeach ?>

							</table>
							<br>
							<p>Bantul, <?php echo $dd['tanggal_beli']; ?></p>
							<table width="1000px">
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td>Mengetahui,</td>

								</tr>

								<tr>
									<td>Penerima Barang</td>
									<td></td>
									<td></td>
									<td>Kepala Subbag/Ketua Tim</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>

								<tr>
									<td></td>
									<td style="text-align: center;">Setuju Untuk Dikeluarkan :</td>
									<td></td>
									<td></td>
								</tr>

								<tr>
									<td></td>
									<td style="text-align: center;">&nbsp;</td>
									<td></td>
									<td></td>
								</tr>

								<tr>
									<td>Menyetujui,</td>
									<td style="text-align: center;"></td>
									<td></td>
									<td></td>
								</tr>


								<tr>
									<td>Kepala Subbag Umum</td>
									<td></td>
									<td></td>
									<td>Petugas Penyimpan Barang</td>
								</tr>

								<tr>
									<td>&nbsp;</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>

								<tr>
									<td>&nbsp;</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>

								<tr>
									<td>&nbsp;</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>

								<tr>
									<td>Achmad Basuki Adibrata, SE, M.Acc</td>
									<td></td>
									<td></td>
									<td>Eka Dayana Putri, A.P.Kb.N</td>
								</tr>

							</table>





							<br>
							<a href="#" class="btn btn-info ds" onclick="window.print()"><i class="fa fa-print"></i> Cetak Struk</a>
							<a href="?" class="btn btn-danger ds">Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>