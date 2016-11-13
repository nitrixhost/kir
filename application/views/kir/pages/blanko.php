<?php if($this->session->userdata('error')){?>
<div class="alert alert-danger" role="alert"><?php echo $this->session->userdata('error');?> <a href="<?php echo base_url();?>" class="btn btn-primary"><?php echo $this->lang->line('button_back');?></a></div>
<?php }else{?>
<div class="container" id="list">
	<div class="row">
		<div class="col-md-1"><img src="<?php echo base_url().$this->config->item('asset_image');?>logo.png" class="img-responsive"></div>
		<div class="col-md-10">
			<h2 class="text-center head"><?php echo $this->lang->line('h1_blankoatas');?></h2>
	 		<h1 class="text-center head"><?php echo $this->lang->line('h1_blankoatas1');?></h1>
	 		<h3 class="text-center head"><?php echo $this->lang->line('h1_blankoatas2');?></h3>
	 		<h4 class="text-center head"><?php echo $this->lang->line('h1_blankoatas3');?></h4>
		</div>
		<div class="col-md-1"><img src="<?php echo base_url().$this->config->item('asset_image');?>logo.png" class="img-responsive"></div>
	</div>
<?php foreach($datas as $r){?>
	<div class="row">
		<hr class="style2" />
		<div class="col-md-8 col-md-offset-2">
			<h2 class="text-center har"><?php echo $this->lang->line('h1_laporan');?></h2>
		</div>
	</div>
	<div class="row mar-top20">
		<div class="col-md-3">
			<div class="form-group mar-blank1">
				<label for="nouji"><?php echo $this->lang->line('label_nouji');?></label>
				<input type="text" name="nouji" value="<?php echo $r->no_uji;?>" class="form-control" disabled>
			</div>
			<div class="form-group">
				<label for="nokendaraan"><?php echo $this->lang->line('label_nokendaraan');?></label>
				<input type="text" name="nokendaraan" value="<?php echo $r->no_kendaraan;?>" class="form-control" disabled>
			</div>
			<dl class="dl-horizontal">
  				<dt class="list-dt"><?php echo $this->lang->line('label_nama_pemilik');?></dt>
  				<dd class="classl">: <?php echo $r->nama_pemilik;?></dd>
  				<dt class="list-dt"><?php echo $this->lang->line('label_alamat');?></dt>
  				<dd class="classl">: <?php echo $r->alamat_pemilik;?></dd>
  				<dt class="list-dt"><?php echo $this->lang->line('label_jeniskendaraan');?></dt>
  				<dd class="classl">: <?php echo $r->jenis_kendaraan;?></dd>
  				<dt class="list-dt"><?php echo $this->lang->line('label_merek');?></dt>
  				<dd class="classl">: <?php echo $r->merk_type;?></dd>
  				<dt class="list-dt"><?php echo $this->lang->line('label_tahunpembuatan');?></dt>
  				<dd class="classl">: <?php echo $r->tahun_pembuatan;?></dd>
  				<dt class="list-dt"><?php echo $this->lang->line('label_nomesin');?></dt>
  				<dd class="classl">: <?php echo $r->no_mesin;?></dd>
  				<dt class="list-dt"><?php echo $this->lang->line('label_norangka');?></dt>
  				<dd class="classl">: <?php echo $r->no_ragngka;?></dd>
			</dl>
		</div>
	</div>
	<div class="row mar-top30">
		<div class="col-md-3">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th class="upper"><?php echo $this->lang->line('th_peralatan');?></th>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_101');?> <input type="checkbox" name="nocasis" <?php if($r->no_chasis == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_nocasis');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_102');?> <input type="checkbox" name="pelat" <?php if($r->pelat_pabrik_pembuat == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_pelat_pembuat');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_103');?> <input type="checkbox" name="103" <?php if($r->pelat_nomor == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_pelat_nomor');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_104');?> <input type="checkbox" name="104" <?php if($r->tulisan == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_tulisan');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_105');?> <input type="checkbox" name="105" <?php if($r->penghapus_kaca_depan == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_penghapus_kaca_depan');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_106');?> <input type="checkbox" name="106" <?php if($r->klakson == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_klakson');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_107');?> <input type="checkbox" name="107" <?php if($r->kaca_spion == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_kaca_spion');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_108');?> <input type="checkbox" name="108" <?php if($r->pandangan_kedepan == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_pandangan_kedepan');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_109');?> <input type="checkbox" name="109" <?php if($r->kaca_penahan_s_matahari == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_kaca_penahan_s_matahari');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_110');?> <input type="checkbox" name="110" <?php if($r->alat_pengendalian == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_alat2_pengendalian');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_111');?> <input type="checkbox" name="111" <?php if($r->lampu_indikasi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lapu_indikasi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_112');?> <input type="checkbox" name="112" <?php if($r->spedometer == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_speedometer');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_113');?> <input type="checkbox" name="113" <?php if($r->perlengkapan == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_perlengkapan');?></dd>
								<dt class="list-dt table-dt"><input type="checkbox" name="zerp" <?php if($r->peralatan_lulus == 1){echo "checked"; }else{}?>> <?php echo $this->lang->line('td_lulus');?></dt>
								<dd class="classk"><input type="checkbox" name="zero" <?php if($r->peralatan_gagal == 1){echo "checked"; }else{}?>><?php echo $this->lang->line('td_gagal');?></dd>
							</dl>
						</td>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_201');?> <input type="checkbox" name="lampujauh" <?php if($r->lampu_jauh == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_jauh');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_202');?> <input type="checkbox" name="lampujauh" <?php if($r->tambahan_lampu_jauh == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_tambahan_lampu_jauh');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_203');?> <input type="checkbox" name="203" <?php if($r->lsmpu_dekat == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_dekat');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_204');?> <input type="checkbox" name="204" <?php if($r->arah_lampu == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_arah_lampu');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_205');?> <input type="checkbox" name="205" <?php if($r->lampu_kabut == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_kabut');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_206');?> <input type="checkbox" name="206" <?php if($r->lampu_posisi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_posisi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_207');?> <input type="checkbox" name="207" <?php if($r->lampu_belakang == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_belakang');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_208');?> <input type="checkbox" name="208" <?php if($r->lampu_rem == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_rem');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_209');?> <input type="checkbox" name="209" <?php if($r->lampu_pelat_nomor == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_pelat_nomor');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_210');?> <input type="checkbox" name="210" <?php if($r->lampu_mundur == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_mundur');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_211');?> <input type="checkbox" name="211" <?php if($r->lampu_kabut_belakang == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_kabut_belakang');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_212');?> <input type="checkbox" name="212" <?php if($r->lampu_arah_peringatan == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_arah_peringatan');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_213');?> <input type="checkbox" name="213" <?php if($r->reflektor_merah == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_reflektor_merah');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_214');?> <input type="checkbox" name="214" <?php if($r->lampu_tambahan_lain == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lamppu_tambahan_lain');?></dd>
								<dt class="list-dt table-dt"><input type="checkbox" name="zerp" <?php if($r->peralatan_dua_lulus == 1){echo "checked"; }else{}?>> <?php echo $this->lang->line('td_lulus');?></dt>
								<dd class="classk"><input type="checkbox" name="zero" <?php if($r->peralatan_dua_gagal == 1){echo "checked"; }else{}?>><?php echo $this->lang->line('td_gagal');?></dd>
							</dl>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-md-3">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th class="upper"><?php echo $this->lang->line('th_sistem_kemudi');?></th>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_301');?> <input type="checkbox" name="301" <?php if($r->roda_kemudi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_roda_kemudi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_302');?> <input type="checkbox" name="302" <?php if($r->spelling == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_spelling');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_303');?> <input type="checkbox" name="303" <?php if($r->batang_kemudi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_batang_kemudi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_304');?> <input type="checkbox" name="304" <?php if($r->roda_gigi_kemudi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_roda_gigi_kemudi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_305');?> <input type="checkbox" name="305" <?php if($r->sambungan_kemudi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_sambungan_kemudi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_306');?> <input type="checkbox" name="306" <?php if($r->penyambung_sandi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_penyambung_sendi_peluru');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_307');?> <input type="checkbox" name="307" <?php if($r->power_stering == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_power_stering');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_308');?> <input type="checkbox" name="308" <?php if($r->side_slip == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_slide_slip');?></dd>
								<dt class="list-dt table-dt"><input type="checkbox" name="zerp" <?php if($r->sistem_kemudi_lulus == 1){echo "checked"; }else{}?>> <?php echo $this->lang->line('td_lulus');?></dt>
								<dd class="classk"><input type="checkbox" name="zero" <?php if($r->sistem_kemudi_gagal == 1){echo "checked"; }else{}?>><?php echo $this->lang->line('td_gagal');?></dd>
							</dl>
						</td>
					</tr>
					<tr>
						<th class="upper"><?php echo $this->lang->line('th_as_suspensi');?></th>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_401');?> <input type="checkbox" name="401" <?php if($r->suspensi_roda_depan == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_suspensi_roda_depan');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_402');?> <input type="checkbox" name="402" <?php if($r->suspensi_roda_belakang == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_suspnesi_roda_belakang');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_403');?> <input type="checkbox" name="403" <?php if($r->sumbu == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_sumbu');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_404');?> <input type="checkbox" name="404" <?php if($r->pemasangan_sumbu == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_pemasangan_sumbu');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_405');?> <input type="checkbox" name="405" <?php if($r->pegas == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_pegas');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_406');?> <input type="checkbox" name="406" <?php if($r->bantalan_roda == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_bantalan_roda');?></dd>
								<dt class="list-dt table-dt"><input type="checkbox" name="zerp" <?php if($r->as_suspendi_lulus == 1){echo "checked"; }else{}?>> <?php echo $this->lang->line('td_lulus');?></dt>
								<dd class="classk"><input type="checkbox" name="zero" <?php if($r->as_suspendi_gagal == 1){echo "checked"; }else{}?>><?php echo $this->lang->line('td_gagal');?></dd>
							</dl>
						</td>
					</tr>
					<tr>
						<th class="upper"><?php echo $this->lang->line('th_ban');?></th>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_501');?> <input type="checkbox" name="501" <?php if($r->ukuran_dari_jenis_ban == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_ukuran_dan_jenis_ban');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_402');?> <input type="checkbox" name="502" <?php if($r->keadaan_ban == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_keadaan_ban');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_503');?> <input type="checkbox" name="503" <?php if($r->kedalaman_kembang_ban == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_kedalaman_kembang_ban');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_504');?> <input type="checkbox" name="504" <?php if($r->ukuran_dan_jenis_pelek == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_ukuran_dan_jenis_pelek');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_505');?> <input type="checkbox" name="505" <?php if($r->keadaan_pelek == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_keadaan_pelek');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_506');?> <input type="checkbox" name="506" <?php if($r->pengukuran_ban_pelek == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_pengukuran_ban');?></dd>
								<dt class="list-dt table-dt"><input type="checkbox" name="zerp" <?php if($r->ban_lulus == 1){echo "checked"; }else{}?>> <?php echo $this->lang->line('td_lulus');?></dt>
								<dd class="classk"><input type="checkbox" name="zero" <?php if($r->ban_gagal == 1){echo "checked"; }else{}?>><?php echo $this->lang->line('td_gagal');?></dd>
							</dl>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-md-3">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th class="upper"><?php echo $this->lang->line('th_rangka_body');?></th>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_601');?> <input type="checkbox" name="601" <?php if($r->rangka_roda_kemudi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_roda_kemudi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_602');?> <input type="checkbox" name="602" <?php if($r->speling_roda_kemudi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_spelling');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_603');?> <input type="checkbox" name="603" <?php if($r->rangka_batang_kemudi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_batang_kemudi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_604');?> <input type="checkbox" name="604" <?php if($r->rangka_roda_gigi_kemudi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_roda_gigi_kemudi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_605');?> <input type="checkbox" name="605" <?php if($r->rangka_sambungan_kemudi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_sambungan_kemudi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_606');?> <input type="checkbox" name="606" <?php if($r->penyambung_sendi_peluru == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_penyambung_sendi_peluru');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_607');?> <input type="checkbox" name="607" <?php if($r->rangka_power_stering == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_power_stering');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_608');?> <input type="checkbox" name="608" <?php if($r->slide_slip == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_slide_slip');?></dd>
								<dt class="list-dt table-dt"><input type="checkbox" name="zerp" <?php if($r->rangka_lulus == 1){echo "checked"; }else{}?>> <?php echo $this->lang->line('td_lulus');?></dt>
								<dd class="classk"><input type="checkbox" name="zero" <?php if($r->rangka_gagal == 1){echo "checked"; }else{}?>><?php echo $this->lang->line('td_gagal');?></dd>
							</dl>
						</td>
					</tr>
					<tr>
						<th><?php echo $this->lang->line('th_sistem_kemudi_2');?></th>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_701');?> <input type="checkbox" name="701" <?php if($r->pedal_rem == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_pedal_rem');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_702');?> <input type="checkbox" name="702" <?php if($r->speling_rem == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_speling_rem');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_703');?> <input type="checkbox" name="703" <?php if($r->lampu_dekat == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_dekat');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_704');?> <input type="checkbox" name="704" <?php if($r->sistem_kemudi_dua_arah_lampu == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_arah_lampu');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_705');?> <input type="checkbox" name="705" <?php if($r->sistem_kemudi_dua_lampu_kabut == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_kabut');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_706');?> <input type="checkbox" name="706" <?php if($r->sistem_kemudi_dua_lampu_posisi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_posisi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_707');?> <input type="checkbox" name="707" <?php if($r->sistem_kemudi_dua_lampu_belakang == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_belakang');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_708');?> <input type="checkbox" name="708" <?php if($r->sistem_kemudi_dua_lampu_rem == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_rem');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_71');?> <input type="checkbox" name="71" <?php if($r->sistem_kemudi_dua_lampu_pelat_nomor == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_pelat_nomor');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_711');?> <input type="checkbox" name="711" <?php if($r->sistem_kemudi_dua_lampu_mundur == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_mundur');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_712');?> <input type="checkbox" name="712" <?php if($r->lampu_kabut_bel == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_kabut_belakang');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_72');?> <input type="checkbox" name="72" <?php if($r->lampu_arah_per == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_arah_peringatan');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_721');?> <input type="checkbox" name="721" <?php if($r->sistem_kemudi_dua_reflektor_merah == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_reflektor_merah');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_722');?> <input type="checkbox" name="722" <?php if($r->lampu_tambahan == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lamppu_tambahan_lain');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_723');?> <input type="checkbox" name="723" <?php if($r->lampu_jauh == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_jauh');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_724');?> <input type="checkbox" name="724" <?php if($r->sistem_kemudi_dua_tambahan_lampu_jauh == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_tambahan_lampu_jauh');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_725');?> <input type="checkbox" name="725" <?php if($r->lampu_dekat == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_dekat');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_73');?> <input type="checkbox" name="73" <?php if($r->arah_lampu_dua == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_arah_lampu');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_731');?> <input type="checkbox" name="731" <?php if($r->lampu_kabut_dua == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_kabut');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_732');?> <input type="checkbox" name="732" <?php if($r->lampu_posisi_dua == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_posisi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_733');?> <input type="checkbox" name="733" <?php if($r->lampu_belakang_dua == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu_belakang');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_734');?> <input type="checkbox" name="734" <?php if($r->lampu == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_lampu');?></dd>
								<dt class="list-dt table-dt"><input type="checkbox" name="zerp" <?php if($r->sistem_kemudi_dua_lulus == 1){echo "checked"; }else{}?>> <?php echo $this->lang->line('td_lulus');?></dt>
								<dd class="classk"><input type="checkbox" name="zero" <?php if($r->sistem_kemudi_dua_gagal == 1){echo "checked"; }else{}?>><?php echo $this->lang->line('td_gagal');?></dd>
							</dl>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-md-3">
			<div class="table-responsive table-bordered">
				<table class="table">
					<tr>
						<th class="upper"><?php echo $this->lang->line('th_sistem_ruang_buang');?></th>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_741');?> <input type="checkbox" name="741" <?php if($r->fungsi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_fungsi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_75');?> <input type="checkbox" name="75" <?php if($r->efesiensi_rem == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_efisiensi_rem');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_751');?> <input type="checkbox" name="751" <?php if($r->rem_utama == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_rem_utama');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_752');?> <input type="checkbox" name="752" <?php if($r->perbedaan_depan == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_perbedaan_depan');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_753');?> <input type="checkbox" name="753" <?php if($r->perbedaan_belakang == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_perbedaan_belakang');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_754');?> <input type="checkbox" name="754" <?php if($r->rem_parkir == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_rem_parkir');?></dd>
								<dt class="list-dt table-dt"><input type="checkbox" name="zerp" <?php if($r->ruang_gas_lulus == 1){echo "checked"; }else{}?>> <?php echo $this->lang->line('td_lulus');?></dt>
								<dd class="classk"><input type="checkbox" name="zero" <?php if($r->ruang_gas_gagal == 1){echo "checked"; }else{}?>><?php echo $this->lang->line('td_gagal');?></dd>
							</dl>
						</td>
					</tr>
					<tr>
						<th><?php echo $this->lang->line('th_mesin_transmisi');?></th>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_801');?> <input type="checkbox" name="801" <?php if($r->dudukan_mesin == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_dudukan_mesin');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_802');?> <input type="checkbox" name="802" <?php if($r->kondisi_mesin == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_kondisi_mesin');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_803');?> <input type="checkbox" name="803" <?php if($r->transmisi == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_transmisi');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_804');?> <input type="checkbox" name="804" <?php if($r->sistem_gas_buang == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_sistim_gas_buang');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_805');?> <input type="checkbox" name="805" <?php if($r->emisi_asap == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_emisi_asap');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_806');?> <input type="checkbox" name="806" <?php if($r->emisi_co == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_emisi_co');?></dd>
								<dt class="list-dt table-dt"><input type="checkbox" name="zerp" <?php if($r->mesin_lulus == 1){echo "checked"; }else{}?>> <?php echo $this->lang->line('td_lulus');?></dt>
								<dd class="classk"><input type="checkbox" name="zero" <?php if($r->mesin_gagal == 1){echo "checked"; }else{}?>><?php echo $this->lang->line('td_gagal');?></dd>
							</dl>
						</td>
					</tr>
					<tr>
						<th><?php echo $this->lang->line('th_lain_lain');?></th>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_805');?> <input type="checkbox" name="805" <?php if($r->lainlain_emisi_asap == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_emisi_asap');?></dd>
								<dt class="list-dt table-dt"><?php echo $this->lang->line('td_806');?> <input type="checkbox" name="806" <?php if($r->lainlain_emisi_co == 1){echo "checked"; }else{}?>></dt>
								<dd class="classk"><?php echo $this->lang->line('td_emisi_co');?></dd>
								<dt class="list-dt table-dt"><input type="checkbox" name="zerp" <?php if($r->lainlain_lulus == 1){echo "checked"; }else{}?>> <?php echo $this->lang->line('td_lulus');?></dt>
								<dd class="classk"><input type="checkbox" name="zero" <?php if($r->lainlain_gagal == 1){echo "checked"; }else{}?>><?php echo $this->lang->line('td_gagal');?></dd>
							</dl>
						</td>
					</tr>
					<tr>
						<td>
							<dl class="dl-horizontal">
							</dl>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<?php }?>
</div>
<div id="lista"></div>
<?php }?>