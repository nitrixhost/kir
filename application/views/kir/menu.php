
<?php if(current_url() == site_url('home/searchBlanko')){?>
<?php }else{?>
<div class="container">
   		<div class="row">
   			<div class="col-md-12">
   				<nav class="navbar navbar-default">
  					<div class="container-fluid">
    					<!-- Brand and toggle get grouped for better mobile display -->
    					<div class="navbar-header">
      						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        						<span class="sr-only">Toggle navigation</span>
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span>
      						</button>
      						<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url().$this->config->item('asset_image');?>logo.png" alt="uji kir" class="img-responsive"></a>
    					</div>

    					<!-- Collect the nav links, forms, and other content for toggling -->
    					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      						<ul class="nav navbar-nav">
        						<!--<li><a href="#"><i class="fa fa-area-chart" aria-hidden="true"></i>

 <?php echo $this->lang->line('menu_report');?> </a></li>-->
        						<li><a href="<?php echo site_url('home/notifikasi');?>"><i class="fa fa-bell-o" aria-hidden="true"></i>
 <?php echo $this->lang->line('menu_notifikasi');?></a></li>  
                    <li><a href="#" data-toggle="modal" data-target="#datasearch" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo $this->lang->line('menu_blanko');?></a>
							   </ul>
                 <ul class="nav navbar-nav navbar-right">
                 <form class="navbar-form navbar-right" role="search">
                      <div class="form-group">
                        <div class="input-group input-group-lg">
                        <input type="text" class="form-control" name="search" id="search" placeholder="<?php echo $this->lang->line('label_search');?>">
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                    </div>
                      </div>
                    </form>
                </ul>
   						</div>
   					</div>
   				</nav>
   			</div>
   		</div>




<div class="modal fade" id="datasearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('title_blanko');?></h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('home/searchBlanko');?>
          <div class="form-group">
            <label for="nouji" class="control-label"><?php echo $this->lang->line('label_nouji');?></label>
            <input type="text" class="form-control" id="noji" name="nouji" required>
            <p></p> 
          </div>
          <input type="submit" class="btn btn-primary" value="<?php echo $this->lang->line('button_submit');?>" id="btn">
        </form>
      </div>
    </div>
  </div>
</div>
<?php }?>
