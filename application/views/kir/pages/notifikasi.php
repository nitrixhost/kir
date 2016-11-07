<div class="container">
	<div class="row">
		<div class="col-md-4">
		<?php foreach($today as $k){?>
			<h4><strong><?php echo $this->lang->line('h1_h1sebelum');?></strong></h3>
			<div class="alert alert-danger" role="alert">
				<ul class="list-group">
					<li class="list-group-item"><a href="#"><?php echo $k->persetujuan_dari;?></a></li>
				</ul>
			</div>
		<?php }?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<?php foreach($tiga as $m){?>
			<h4><strong><?php echo $this->lang->line('h1_h3sebelum');?></strong></h3>
			<div class="alert alert-danger" role="alert">
				<ul class="list-group">
					<li class="list-group-item"><a href="#"><?php echo $k->persetujuan_dari;?></a></li>
				</ul>
			</div>
			<?php }?>
		</div>
	</div>
</div>