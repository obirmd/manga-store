<div class="contaner-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item )
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
					echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total, 0,',','.');
				 ?>
			</div><br><br>
			<h3>Input alamat pengiriman dan pembayaran</h3>
			<form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?> ">

				<div class="from-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control"> 
				</div>

				<div class="from-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>

				<div class="from-group">
					<label>No. Telepon</label>
					<input type="text" name="no_telp" placeholder="No Telepon Anda" class="form-control">
				</div>

				<div class="from-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control">
						<option>JNE</option>
						<option>JNT</option>
						<option>Gojek</option>
						<option>Grab</option>
						<option>POS Indonesia</option>
					</select>
				</div>

				<div class="from-group mb-3">
					<label>Via BANK</label>
					<select class="form-control">
						<option>BRI - 422</option>
						<option>BCA - 014</option>
						<option>MANDIRI - 008</option>
						<option>MEGA - 426</option>
						<option>BNI - 009</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-info mb-3">Pesan</button>
				
			</form>

			<?php 
		} else
		{
			echo "<h4>keranjang belanja anda masih kosong!";
		}
			 ?>

		</div>


		<div class="col-md-2"></div>
	</div>
</div>