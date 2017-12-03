<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Raporlama Arşiv</title>

<?php 
        session_start();
        
#HER SAYFA ICIN LAZIM OLAN ORTAK LINKLER TEK CATI ALTINDA TOPLAYIP BURDA EKLEDIM
include 'Eklentiler/LNKLER-ORTAK.php';
        
?>
     
   <script type="text/javascript">
</script>
    
</head>
<body>
<div id="wrapper">
  <div class="overlay"></div>
  
 <?php 
 
        
        if(is_file("fonksiyons.php")){
             include_once 'fonksiyons.php';
             
        }else{
            
            echo "fonksiyons.php YOK";
            exit();
        }
        
 

  $birimadi = "";
                            
                           #BURDA Birim adını tutma gerekiyoki İKİ AYRI GOSTERİMDE SIKINTI YAŞAMAMAK İÇİN
                            
                          if(isset($_GET["Birimadi"])){
                              $birimadi = $_GET["Birimadi"];
                                $_SESSION["tut"] = $birimadi;
                          }//if END
                          
 ?>
  
  <!-- Page Content -->
  <div id="page-content-wrapper">
    <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas"> 
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span> 
    </button>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
           
            <div class="jumbotron"><h1>Raporlama</h1></div>
            
            <!-- #BIRIMIN SAYFASINA GERI DONUS YAPILIR -->
            <a class="btn btn-primary btn-lg" href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Geri Dön</a>
            
            
            <div class="btn btn-group pull-right">
            <a id="yanyana" href="raporlama.php?durum=yan" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-th"></span></a>
            <a id="liste"  href="raporlama.php?durum=liste" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-th-list"></span></a>
            </div>
           
          <div class="jquery-script-ads" style="margin:30px auto;">
             
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-md-4 col-sm-4 col-sx-12">
                    
                      <div class="col-lg-10 col-md-4 col-sm-3 col-xs-12">
                            <?php
                           
                         
                        
                          
                          #SILME İŞLEMİ ICIN 'birim adını alıyorum' ve 'sil' degiskeni ilede dosya ismini alıyorum 
                          if(isset($_GET["birim"])){
                              
                              $birim = $_GET["birim"];
                              $sil = $_GET["sil"];
                              
                              $paradoks = $birim.$sil;
                             $siling  = @unlink($paradoks);
                                if($siling){
                                    
                                echo "Silme Başarılı http://localhost".$_SERVER["PHP_SELF"];
                                KontrolizeAlt($_SESSION["tut"]);
                                exit();
                           #exit() Fonk. işlemini alt alta sıralama ile devam etsin diye yaptım
                            # VE 'yanyana' listeleme altta ek olarak açıldıgı için exit yaparak 
                           #bundan sonraki işlemleri öldürmüş oldum.         
                                    exit(); 
                                }else{
                                        echo "Silerken Bir hata oluştu.. <br>";
                                }
                          }//İF sil END
                           

                            
                            
                            
                            
                                if(!empty($_GET["durum"]) AND $_GET["durum"] == "yan"){
                                    
                                    KontrolizeYan($_SESSION["tut"]);
                                    
                                }else if(!empty($_GET["durum"]) AND $_GET["durum"] == "liste"){
                                       KontrolizeAlt($_SESSION["tut"]);
                             
                                }else{
                                    KontrolizeYan($_SESSION["tut"]);
                                }
                            
                             
                               // session_destroy();
                                
                     
                            ?>
                      </div>
                  </div>
              </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper --> 
  
</div>
<!-- /#wrapper --> 

 
</body>
</html>
