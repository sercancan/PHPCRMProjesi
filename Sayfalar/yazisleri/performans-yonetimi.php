  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php
  require './LNKLER.php';
  
  ?>
     <script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>   
     <script src="../../Eklentiler/jquery-ui.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../../Eklentiler/CHARTS/codebase/fonts/font_roboto/roboto.css"/>
<link rel="stylesheet" type="text/css" href="../../Eklentiler/CHARTS/codebase/dhtmlx.css"/>
<script src="../../Eklentiler/CHARTS/codebase/dhtmlx.js" type="text/javascript"></script>
       
       
        <script src="../../Eklentiler/CHARTS/yuvarlak.js" type="text/javascript"></script>
        <script src="../../Eklentiler/CHARTS/cubuk.js" type="text/javascript"></script>
       
        
    <style>
        .row{
    margin-top:40px;
    padding: 0 10px;
}

.clickable{
    cursor: pointer;   
}

.panel-heading span {
	margin-top: -20px;
	font-size: 15px;
}
    </style>
    
<script>

 var jQueryCharts = $.noConflict(true);
    
(function($) {
    
    $(document).ready(function(){
            $(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
	}
});
    });
 
})(jQueryCharts);



</script>
         
       
</head>
<body onload="cubukCHART();yuvarlakCHART();">
  
 <?php include './sidebarr.php'; ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
        <div class="row">
 <div class="col-lg-8 col-lg-offset-1">
    <div class="container">
        	<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Çizelge Performans</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
                    <div class="panel-body">
                        
                             <div id="tke" style="width:1050px;height:350px;"></div>
         
                        <input type="button" class="btn btn-primary" value="Küçükten Büyüğe(Rakam)" onclick="myBarChart.sort('#rakam#','asc');">
                        <input type="button" class="btn btn-danger" value="Büyükten Küçüğe(Rakam)" onclick="myBarChart.sort('#rakam#','desc');">
                        <input type="button" class="btn btn-success" value="Küçükten Büyüğe (Yıl)" onclick="myBarChart.sort('#yil#','asc');">
                        <input type="button" class="btn btn-default" value="Büyükten Küçüğe (Yıl)" onclick="myBarChart.sort('#yil#','desc');">
                        
                    </div>
			</div>
                      
                          
                          
                    </div>
 </div> <!--  col-lg-8-->
  <div class="col-lg-8 col-lg-offset-1">
    <div class="container">
        	<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Aylık Gösterge</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
                    <div class="panel-body">
                        
                         <div id="chartbox" style="width:800px;height:450px;"></div>
                        
                    </div>
			</div>
		</div>
                    
                    </div>
 </div> <!--  col-lg-8-->
 
   </div>
      </div>
     
  <?php// require_once "bildirim-ve-loginas.php"; ?>



</body>
  </html>
