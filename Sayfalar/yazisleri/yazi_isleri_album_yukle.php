  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require 'LNKLER.php'; ?>
        
     
     <script src="../../Eklentiler/uploader/yazi_isleri_album.js" type="text/javascript"></script>
 <link href="../../CSSS/birimlerim-kodu.css" rel="stylesheet" type="text/css"/>
     
</head>
<body>
  
 <?php include 'sidebarr.php';
 require_once '../VTYS-CONNECT.php';
 ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
            

 <div class="col-lg-7 col-lg-offset-2">
                  <!-- DOSYA YUKLEME ALANI START -->
       <!--  <div id="wrapper"> -->         
  <!-- <div class="overlay"></div> -->
  
             <?php 
           
           
             ?>
              <h1 class="page-header">Encümen Dosya Yükleme Merkezi</h1>
          <div class="jquery-script-ads" style="margin:30px auto;">
              <script type="text/javascript">
</script>
          </div>

                      <div class="panel panel-default" >
                        <div class="panel-heading" style="background:#313F47;">
                          <h3 class="panel-title" style="color:white;">Dosya ve Yükle</h3>
                        </div>
                        <div class="panel-body">
                        <form action="yazi_isleri_encumen-birimi-dosyaYukle.php" class="dropzone decoration" id="my-awesome-dropzone">
                      </form>
                        </div>
                          <div class="panel-footer">
                              <p class="text text-danger"><b>NOT :</b>Dosya ve Klasör Yüklemek İçin Kutucuk Ortasına Sürükle bırak veya yazının üstüne Tıkla.<b>!</b>   </p>
                          </div>
                      </div>
                       <div id="ajaxdanGelenVeri"></div>
                     
                       
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
        </div>
   
 
        
      </div>
  

</body>
  </html>
