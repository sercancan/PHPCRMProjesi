  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php
  
  require 'LNKLER.php'; 
  require '../VTYS-CONNECT.php';
  ?>
    
     <script src="../../Eklentiler/uploader/evrak-kayit.js" type="text/javascript"></script>
        <link href="../../CSSS/birimlerim-kodu.css" rel="stylesheet" type="text/css"/>   
</head>
<body>
  
 <?php include 'sidebarr.php'; ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
            

 <div class="col-lg-7 col-lg-offset-2">
                  <!-- DOSYA YUKLEME ALANI START -->
       <!--  <div id="wrapper"> -->         
  <!-- <div class="overlay"></div> -->
  
             
              <h1 class="page-header">Evrak Kayıt Dosya Yükleme Merkezi</h1>
          <div class="jquery-script-ads" style="margin:30px auto;">
              <script type="text/javascript">
</script>
          </div>

                      <div class="panel panel-default" >
                        <div class="panel-heading" style="background:#313F47;">
                          <h3 class="panel-title" style="color:white;">Dosya Yükle</h3>
                        </div>
                        <div class="panel-body">
                        <form action="yazi_isleri_evrak-kayit-birimi-dosyaYukle.php" class="dropzone decoration" id="my-awesome-dropzone">
                      </form>
                        </div>
                          <div class="panel-footer">
                              <p class="text text-danger"><b>NOT :</b>Dosya ve Klasör Yüklemek İçin Kutucuk Ortasına Sürükle bırak veya yazının üstüne Tıkla.<b>!</b>   </p>
                          </div>
                      </div>
                       <div id="ajaxdanGelenVeri"></div>
                         <p><a class="btn btn-default btn-lg" href="raporlama.php?Birimadi=evrak-kayit-birimi" role="button">Meclis Raporlama &raquo;</a></p>
            
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
                        $kdr = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='evrak-kayit'";
                     $resultMclis = mysql_query($kdr);
                     echo mysql_affected_rows();
                        ?>
                        
                      </span>
                    <br>
                    <span class="text-uppercase w-name">Evrak Kayıt Birimindeki Dosya Sayısı</span>
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
              include 'fonksiyons.php';
             Birimlerdeki_Klasorlere_Yuklenen_Dosya_Boyutu("evrak-kayit");
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
   
     


    <!--Members Sidebar-->
    <div id="members-sidebar" class="members-sidebar">
      <h4 class="pull-left zero-m">Members</h4>
      <span class="close-members-sidebar"><i class="fa fa-remove pull-right"></i></span>
      <div class="clearfix"></div>
      <ul class="nav">
        <li>
          <div class="messages">
            <div class="member-info">
              <img src="img/team/admin.png" alt="admin" class="img-circle pull-left">
              <span class="member-name">Sash Ficus</span>
              <p class="members-message zero-m">Sushi time)))</p>
            </div>
            <div class="member-info">
              <img src="img/team/admin.png" alt="admin" class="img-circle pull-left">
              <span class="member-name">Sash Ficus</span>
              <p class="members-message zero-m">Working hard</p>
            </div>
          </div>
        </li>
        <li class="members-group">Work</li>
        <li><span class="status online"></span>Sash Ficus</li>
        <li><span class="status online"></span>Sash Ficus</li>
        <li><span class="status not-available"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li class="members-group">Partner</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
        <li><span class="status"></span>Sash Ficus</li>
      </ul>
    </div>

 

    <div class="login-modal modal fade">
      <div class="table-wrapper">
        <div class="table-row">
          <div class="table-cell text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="login i-block">
              <div class="content-box">
                <div class="light-dark-bg biggest-box">

                  <h1 class="zero-m text-uppercase">Hoşgeldiniz</h1>

                </div>
                <div class="big-box text-left login-form">
                  <h4 class="text-center">Login</h4>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control material" id="login" placeholder="Kullanıcı">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control material" id="password" placeholder="Şifre">
                    </div>

                    <button type="submit" class="btn btn-block btn-info text-uppercase waves">Sistem Girişi</button>

                  </form>
                  <a href="#" class="green i-block">Forgot password?</a>
                  <p>Do not have an account?</p>
                  <a class="btn btn-block btn-warning text-uppercase waves waves-button">Create an account</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="logout-modal modal fade">
      <div class="table-wrapper">
        <div class="table-row">
          <div class="table-cell text-center">
            <div class="login i-block">
              <div class="content-box">
                <div class="light-blue-bg biggest-box">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 class="zero-m text-uppercase">Çıkmak İstediğinizden Eminmisiniz?</h3>
                  <a href="#" class="i-block" data-dismiss="modal">Evet</a>
                  <a href="#" class="i-block" data-dismiss="modal">Hayır</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</body>
  </html>
