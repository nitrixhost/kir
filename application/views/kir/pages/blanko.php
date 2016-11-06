<div class="container">
	<div class="row">
		<div class="col-md-2"><img src="<?php echo base_url().$this->config->item('asset_image');?>logo.png" class="img-responsive"></div>
		<div class="col-md-8">
			<h2 class="text-center"><?php echo $this->lang->line('h1_blankoatas');?></h2>
	 		<h1 class="text-center"><?php echo $this->lang->line('h1_blankoatas1');?></h1>
	 		<h3 class="text-center"><?php echo $this->lang->line('h1_blankoatas2');?></h3>
	 		<h4 class="text-center"><?php echo $this->lang->line('h1_blankoatas3');?></h4>
		</div>
		<div class="col-md-2"><img src="<?php echo base_url().$this->config->item('asset_image');?>logo.png" class="img-responsive"></div>
	</div>
<?php foreach($datas as $r){?>
	<div class="row">
		<hr />
		<h2 class="text-center"><?php echo $this->lang->line('h1_laporan');?></h2>
		<div class="col-md-3">
			<div class="form-group">
				<label for="nouji"><?php echo $this->lang->line('label_nouji');?></label>
				<input type="text" name="nouji" value="<?php echo $r->no_uji;?>" class="form-control" disabled>
			</div>
			<div class="form-group">
				<label for="nokendaraan"><?php echo $this->lang->line('label_nokendaraan');?></label>
				<input type="text" name="nokendaraan" value="<?php echo $r->no_kendaraan;?>" class="form-control" disabled>
			</div>
			<p><label for="nama" class="text-left"><?php echo $this->lang->line('label_nama_pemilik');?></label> : <span class="text-right"><?php echo $r->nama_pemilik;?></span></p>
			<p><label for="alamat"><?php echo $this->lang->line('label_alamat');?></label> : <?php echo $r->alamat_pemilik;?></p>
			<p><label for="jeniskendaraan"><?php echo $this->lang->line('label_jeniskendaraan');?></label> : <?php echo $r->jenis_kendaraan;?></p>
			<p><label for="merek"><?php echo $this->lang->line('label_merek');?></label> : <?php echo $r->merk_type;?></p>
			<p><label for="tahunpembuatan"><?php echo $this->lang->line('label_tahunpembuatan');?></label> : <?php echo $r->tahun_pembuatan;?></p>
			<p><label for="nomesin"><?php echo $this->lang->line('label_nomesin');?></label> : <?php echo $r->no_mesin;?></p>
			<p><label for="norangka"><?php echo $this->lang->line('label_norangka');?></label> : <?php echo $r->no_ragngka;?></p>
		</div>
	</div>
	<div class="row mar-top30">
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th><?php echo $this->lang->line('th_peralatan');?></th>
				</tr>
				<tr>
					<td></td>
				</tr>
			</table>
		</div>
	</div>
	<?php }?>
</div>