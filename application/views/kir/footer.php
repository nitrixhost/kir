    <script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>Chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>notify.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>angular.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>apps.js"></script>
	<script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>scripts.js"></script>
  <script type="text/javascript">
 <?php if($this->session->flashdata('error')){?>
      $.notify("<?php echo $this->session->flashdata('error');?>","error")
    <?php }elseif($this->session->flashdata('success')){?>
            $.notify("<?php echo $this->session->flashdata('success');?>","success");
        <?php } ?>
</script>

	<script type="text/javascript">
		function drawLine(){
    	//get json data
    	var jsonData = $.ajax({
    		url: "<?php echo site_url('home/datachart');?>",
    		//dataType: 'json',
    	}).done(function (results){
    		//json data
    		var la = JSON.parse(results);
    		var label = la.labels;
    		var datas = la.data;

    		var data = {
    			labels: label,
    			datasets: [
    				{
      					label: "<?php echo $this->lang->line('line_heading_th_pembuatan');?>",
      					lineTension: 0,
      					data: datas,
    				},
    			]
  			};
  			var ctx = $("#kendaraan");
  			var myChart = Chart.Bar(ctx,{data:data, options: {scales: {yAxes: [{ticks: {beginAtZero:true}}]}}});
			
    	});
  }
    
drawLine();
	</script>
  <script type="text/javascript">
 <?php if($this->session->flashdata('error')){?>
      $.notify("<?php echo $this->session->flashdata('error');?>","error")
    <?php }elseif($this->session->flashdata('success')){?>
            $.notify("<?php echo $this->session->flashdata('success');?>","success");
        <?php } ?>
</script>
  <script type="text/javascript">
  $('#datasearch').on('show.bs.modal', function (event) {
    $("#btn").click(function() {
        //jika kosong
        if($("#noji").val() == ""){
          $("p").text("Mohon formnya diisi");
        }else{
          $('#datasearch').modal('hide');
        }
    });
  });
</script>
    </body>
    </html>