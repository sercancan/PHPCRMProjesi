  <!DOCTYPE html>
<html lang="en" class="no-js">

<head>

  <?php require 'LNKLER.php'; ?>
    
<link href="../../CSSS/anasayfadaki-chart.css" rel="stylesheet" type="text/css"/>

          
<!-- SİSTEEM YUKLENEN DOSYALARIN TEK TEK SAYACC SEKLİNDE SAYMASI ICIN GEREK JQUERY KODLARI -->
            <script src="../../Eklentiler/jquery.min.js"></script>
            <script src="../../Eklentiler/jquery-ui.min.js" type="text/javascript"></script>
            
        <script src="../../Eklentiler/jquery.waypoints.js"></script>
        <script src="../../Eklentiler/jquery.counterup.min.js"></script>
        
        <link href="../../CSSS/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
        <link href="../../CSSS/anasayfa.css" rel="stylesheet" type="text/css"/>

        <link href="../../Eklentiler/pines-notify/pnotify.css" rel="stylesheet" type="text/css"/>
        <script src="../../Eklentiler/pines-notify/pnotify.min.js" type="text/javascript"></script>
        

<style>
    .BildirimRakamıGoruntulemeME{
        display:none;
    }
   

  
    </style>
<script type="text/javascript">
    
    var jQueryCalis = $.noConflict(true);
    
(function($) {
$(document).ready(function($) {
                /* Widgetlerdekİ Rakamları Sayıyo */
                $('.sayarakGitme').counterUp({
                    delay: 100,
                    time: 1000
                });
         
         /* BILDIRIM VAR OLDUGUNDA YANIP SONME ISLEMINI YAPICAK OLOAN KOD START */
        var myVar;
function FlashlaBildirimi() {
    myVar = setInterval(YanipSonmeIslemi, 500);
}

function YanipSonmeIslemi() {
    
    $(".flashear").toggleClass("BildirimRakamıGoruntulemeME");
}
  /* BILDIRIM VAR OLDUGUNDA YANIP SONME ISLEMINI YAPICAK OLOAN KOD END */
     FlashlaBildirimi();           
                
                
             /*      new PNotify({title: 'E-Posta',text: 'Başarıyla Gönderildi.',
	icon: 'ti ti-check',  type: 'warning',styling: 'fontawesome'
							});*/
          
            }); //$(document).ready(function($)
            
    
})(jQueryCalis);

        
</script>
 
        

</head>
<body>
  
 <?php 
 include 'sidebarr.php'; 
  require_once '../VTYS-CONNECT.php';
 ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
      <div class="row">
      
          
        <div class="col-lg-12">
          <div class="page-header">
            <h2 >Anasayfa</h2>
          </div>
            
              <div class="col-md-4"> 
                  <!-- TARIH  WIDGET
			<div class="info-tile info-tile-alt tile-indigo">
				<div class="tile-icon">
                                     
                                     <span class="w-refresh w-p-icon">
                                       <i class="mdi mdi-calendar-clock"></i>
                                     </span>
                                </div>
				<div class="tile-heading"><span>Bugün</span></div>
				<div class="tile-body">
                                    <span><?=  date("d.m.Y"); ?></span>
                                </div>
				
                                
			</div>
                  -->
		</div>
            <!--TARIH WIDGET -->
            <!--
             <div class="col-sm-6 col-lg-4">
              <div class="content-box ultra-widget yellow-bg">
                <div class="w-content">
                  <div class="w-icon right pull-right"><i class="mdi mdi-calendar-clock"></i></div>
                  <div class="w-descr left pull-left text-center">
                    <span class="text-uppercase w-name">Bugün</span>
                    <br>
                    <span class="w-amount"><?=  date("d.m.Y"); ?></span>
                  </div>
                </div>
              </div>
            </div>
            -->
            <!--TARIH WIDGGET END -->
           
        </div>
          
          
      </div>
        
          <div class="row">
		<div class="col-md-3">
			<div class="info-tile info-tile-alt tile-warning">
				<div class="tile-icon">
                                     
                                     <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                                </div>
				<div class="tile-heading"><span>Meclis Birimi</span></div>
                                <div class="sayarakGitme tile-body"><span>
                                    <?php 
                     $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='meclis'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);
                                    ?>
                                    </span></div>
				<div class="tile-footer"><span class="text-danger">rakam <i class="ti ti-arrow-down"></i></span></div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="info-tile info-tile-alt tile-success">
				<div class="tile-icon">
                                  <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                                </div>
				<div class="tile-heading"><span>Encümen Birimi</span></div>
                                <div class="sayarakGitme tile-body"><span>
                                       <?php 
                     $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='encumen'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);
                                    ?>
                                        
                                    </span></div>
				<div class="tile-footer"><span class="text-success">rakam% <i class="ti ti-arrow-up"></i></span></div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="info-tile info-tile-alt tile-danger">
				<div class="tile-icon">
                                  <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                                </div>
				<div class="tile-heading"><span>Evlendirme Birimi</span></div>
                                <div class="sayarakGitme tile-body"><span>
                                       <?php 
                     $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='evlendirme'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);
                                    ?>
                                        
                                    </span></div>
				<div class="tile-footer"><span class="text-success">rakam% <i class="ti ti-arrow-up"></i></span></div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="info-tile info-tile-alt tile-info">
				<div class="tile-icon">
                                   <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                                </div>
				<div class="tile-heading"><span>Arşiv Birimi</span></div>
				<div class="sayarakGitme tile-body"><span>
                                       <?php 
                     $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='arsiv'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);
                                    ?>
                                    </span></div>
				<div class="tile-footer"><span class="text-danger">rakam% <i class="ti ti-arrow-down"></i></span></div>
			</div>
		</div>
              <div class="col-md-6">
			<div class="info-tile info-tile-alt tile-purple">
				<div class="tile-icon">
                                    <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                                </div>
				<div class="tile-heading"><span>Evrak Kayıt Birimi</span></div>
                                <div class="sayarakGitme tile-body"><span>
                                       <?php 
                     $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='evrak-kayit'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);
                                    ?>
                                    </span></div>
				<div class="tile-footer"><span class="text-success">rakam% <i class="ti ti-arrow-up"></i></span></div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="info-tile info-tile-alt tile-brown">
				<div class="tile-icon">
                                   <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                                </div>
				<div class="tile-heading"><span>Personel Dosya</span></div>
                                <div class="sayarakGitme tile-body"><span>
                                       <?php 
                     $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='personel'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);
                                    ?>
                                        
                                    </span></div>
				<div class="tile-footer"><span class="text-success">rakam% <i class="ti ti-arrow-up"></i></span></div>
			</div>
		</div>
              
               
        </div>
        
        
            <!-- BIRIMLERIN ICINDEKI YUKLENEN DOSYALARI GOSTEREN BILDIRIM KUTUCUKLARI START-->
           <!--
      <div class="row">
          
        <div class="col-lg-12">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                      <span class="sayarakGitme w-amount blue">
                           <?php 
                           /*
                        $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='meclis'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);
                           */
                            ?>
                      </span>
                    <br>
                    <span class="text-uppercase w-name">Meclis Birimi</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45"
                         aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">32%</div>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="sayarakGitme w-amount green"> <?php 
                            
                        /*$queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='encumen'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);
                         *
                         */
                            ?></span>
                    <br>
                    <span class="text-uppercase w-name">Encümen Birimi</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="67"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 67%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">67%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="sayarakGitme w-amount red"> <?php 
                           /* 
                        $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='evlendirme'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);*/
                            ?>
           </span>
                    <br>
                    <span class="text-uppercase w-name">Evlendirme Birimi</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">34%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class=" sayarakGitme counter w-amount yellow"> <?php 
                            /*
                        $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='arsiv'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);*/
                            ?></span>
                    <br>
                    <span class="text-uppercase w-name">Arşiv Birimi</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">52%</div>
                  </div>
                </div>
              </div>
            </div>
               <div class="col-sm-6 col-lg-6">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="sayarakGitme w-amount green"> 
                        <?php 
                            /*
                        $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='evrak-kayit'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);*/
                            ?>
                    </span>
                    <br>
                    <span class="text-uppercase w-name">Evrak Kayıt Birimi</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-danger" role="progressbar" 
                         aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">52%</div>
                  </div>
                </div>
              </div>
            </div>
               <div class="col-sm-6 col-lg-6">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                      <span class=" sayarakGitme w-amount dark">
                           <?php 
                            /*
                        $queryMeclis = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='personel'";
                           $res_count = mysql_query($queryMeclis);
                           echo mysql_num_rows($res_count);*/
                            ?>
                          
                      </span>
                    <br>
                    <span class="text-uppercase w-name">Personel Dosya</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-upload"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="52"
                         aria-valuemin="0" aria-valuemax="100" style="width: 52%">
                    </div>
                  </div>
                  <div class="w-status clearfix">
                    <div class="w-status-title pull-left text-uppercase">Progress</div>
                    <div class="w-status-number pull-right text-uppercase">52%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            -->
         <!-- BIRIMLERIN ICINDEKI YUKLENEN DOSYALARI GOSTEREN BILDIRIM KUTUCUKLARI END-->
        
        <!-- GRAFIKLER OLDUGU BÖLÜM -->
        <div class="row">
    			<!-- BEGIN BAR CHART -->
	<div class="col-lg-11 col-lg-offset-1">
            <div class="grid">
		<div class="grid-header">
		<i class="fa fa-bar-chart-o"></i>
		<span class="grid-title">Birimlere Yüklenen Dosyaların Aylık Bazda Grafik Çizelgesi</span>
	</div>
	<div class="grid-body">
            <div id="chart-bar" style="width:100%; height:350px;"></div>                                                          
	</div>
            </div>
            </div>
   			<!-- END BAR CHART -->
					
        </div>
    	<div class="row" hidden>
                                    
					<!-- BEGIN LINE CHART -->
                                       
					<div class="col-md-6">
						<div class="grid">
							<div class="grid-header">
								<i class="fa fa-bar-chart-o"></i>
								<span class="grid-title">Line Chart</span>
								<div class="pull-right grid-tools">
									<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
									<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
									<a data-widget="remove" title="Remove"><i class="fa fa-times"></i></a>
								</div>
							</div>
							<div class="grid-body">
								<div id="chart-line" style="width:100%; height:250px;"></div>
							</div>
						</div>
					</div>
					<!-- END LINE CHART -->
                                        
					<!-- BEGIN AREA CHART -->
				
						<div class="grid">
							<div class="grid-header">
								<i class="fa fa-bar-chart-o"></i>
								<span class="grid-title">Area Chart</span>
								<div class="pull-right grid-tools">
									<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
									<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
									<a data-widget="remove" title="Remove"><i class="fa fa-times"></i></a>
								</div>
							</div>
							<div class="grid-body">
								<div id="chart-area" style="width:100%; height:250px;"></div>
							</div>
						</div>
					</div>
					<!-- END AREA CHART -->
                                       
                                        <!-- BEGIN LIVE CHART -->
                                        <!--
					<div class="col-md-12">
						<div class="grid">
							<div class="grid-header">
								<i class="fa fa-bar-chart-o"></i>
								<span class="grid-title">ANLIK BILGI</span>
								<div class="pull-right grid-tools">
									<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
									<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
									<a data-widget="remove" title="Remove"><i class="fa fa-times"></i></a>
								</div>
							</div>
							<div class="grid-body">
								<div id="chart-live" style="width:100%; height:250px;"></div>
							</div>
						</div>
					</div>
                                        */
					<!-- END LIVE CHART -->
                                        
                     
    
          </div>
      </div>

   

    


  


</body>
  </html>
