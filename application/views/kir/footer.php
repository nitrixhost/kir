    <script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>Chart.js"></script>
	<script type="text/javascript" src="<?php echo base_url().$this->config->item('asset_js');?>scripts.js"></script>
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
    </body>
    </html>