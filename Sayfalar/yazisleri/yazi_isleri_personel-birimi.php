  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require 'LNKLER.php'; ?>
        
     
   
      <script src="../../Eklentiler/uploader/personel.js" type="text/javascript"></script>
           <link href="../../CSSS/birimlerim-kodu.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  
 <?php
 include 'sidebarr.php';
 include "../VTYS-CONNECT.php";
 ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
            

 <div class="col-lg-7 col-lg-offset-2">
                  <!-- DOSYA YUKLEME ALANI START -->
       <!--  <div id="wrapper"> -->         
  <!-- <div class="overlay"></div> -->
  
             
              <h1 class="page-header">Personel Birimi Dosya Yükleme Merkezi</h1>
          <div class="jquery-script-ads" style="margin:30px auto;">
              <script type="text/javascript">
</script>
          </div>

                      <div class="panel panel-default">
                        <div class="panel-heading"  style="background:#313F47;">
                          <h3 class="panel-title" style="color:white;">Dosya Yükle</h3>
                        </div>
                        <div class="panel-body">
                            <form action="yazi_isleri_personel-birimi-dosyaYukle.php" class="dropzone decoration" id="my-awesome-dropzone">
                      </form>
                        </div>
                          <div class="panel-footer">
                              <p class="text text-danger"><b>NOT :</b>Dosya ve Klasör Yüklemek İçin Kutucuk Ortasına Sürükle bırak veya yazının üstüne Tıkla.<b>!</b>   </p>
                          </div>
                      </div>
                       <div id="ajaxdanGelenVeri"></div>
                         <p><a class="btn btn-default btn-lg" href="raporlama.php?Birimadi=personel-birimi" role="button">Meclis Raporlama &raquo;</a></p>
            
                  <!-- DOSYA YUKLEME ALANI END --> 
      </div>


    <!-- TEXTAREA  START-->
 <div class="col-lg-5 col-lg-offset-2">

  
     <div class="row inputWrapper">
	<div class="col-md-12">
	<div class="left-inner-addon ">
	<i class="fa fa-pencil-square-o"></i>
        
	<textarea id="dosyaHakkindaBilgi" class="form-control material input-lg example-item"
                  rows="5" style="background-color:#F1F4F5;" 
              placeholder="Dosyanın ne hakkında bilgi içerdiğini gösteren bilgi NOTU yazınız."></textarea>
		</div>
		</div>
		</div> 
              </div>
                <!-- TEXTAREA  END-->


                <!-- YUKLU DOSYA SAYISI START-->
              <div class="col-lg-4 col-lg-offset-1">
                  <!--
                  <div class="content-box small-box">
                <span class="fa-stack fa-2x block pull-left">
                  <i class="fa fa-circle fa-stack-2x yellow"></i>
                  <i class="fa fa-soundcloud fa-stack-1x fa-inverse"></i>
                </span>
                <div class="pull-left info">
                    <h1 class="text-uppercase zero-m">
                       //gelecek rakam dur
                    </h1>
                  <span class="block">Meclis Birimi Dosya Sayısı</span>
                </div>
                <div class="clearfix"></div>
              </div>
                  -->
             
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                      <span class="w-amount yellow">
                           <?php 
                        $kdr = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='arsiv'";
                     $resultMclis = mysql_query($kdr);
                     echo mysql_affected_rows();
                        ?>
                        
                      </span>
                    <br>
                    <span class="text-uppercase w-name">Arşiv Birimindeki Dosya Sayısı</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-cloud-download"></i></span>
                 
                </div>
              </div>
            
        </div>
          <!-- YUKLU DOSYA SAYISI END-->
            



   <!-- YUKLU DOSYALARIN MB-GB CINSINDEN DEGER WIDGETI START-->
        <div class="col-lg-4 col-lg-offset-1">
                 
          <div class="content-box biggest-box yellow-bg">
              <div  class="ultra-widget" data-counter="65">
                            <div class="w-icon pull-right"><i class="mdi mdi-harddisk"></i></div>
             </div>
            <div class="pull-left">
               
              <span class="block">
                  Yüklü Dosyaların Kapasite Durumu
              </span>
              <h1 class="text-uppercase zero-m">
                  <?php  
                   include "fonksiyons.php";
                     Birimlerdeki_Klasorlere_Yuklenen_Dosya_Boyutu("arsiv");
                  ?>
                  
              </h1>
                                  
            </div>
              
              <!--
              <div class="pull-right">
              <span class="block">Doluluk Oranı</span>
              <h1 class="text-right zero-m">10 GB</h1>
            </div>
              
                 <div class="clearfix"></div>
                 
                <div class="pull-right">
                    <span class="block">Kalan Boş Kapasite </span>
              <h1 class="text-uppercase zero-m pull-right">18 GB</h1>
            </div>
              -->
            <div class="clearfix"></div>
          </div>
           
             
              </div>
            <!-- YUKLU DOSYALARIN MB-GB CINSINDEN DEGER WIDGETI END-->
         






        </div>
   

      </div>
     
      <div class="row">
        
        <div class="col-lg-8 col-lg-offset-4">
          <!--EKLERSİN BİŞEYLER SANA KALMIŞ -->
        </div>
      </div>

</body>
  </html>
