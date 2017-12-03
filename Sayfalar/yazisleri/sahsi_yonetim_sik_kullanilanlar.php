  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require './LNKLER.php'; ?>
<script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>
     
<script>
   var jQueryFavori = $.noConflict(true);
    
(function($) {
$(document).ready(function($) {
              
              $("#FavorilerURLEkle").click(function(){
                  var urlAdi = $("#URLAdi").val();
                  var urlAdres = $("#URLAdres").val();
                  
                
                          $.ajax({
              url:"sahsi_yonetim_sik_kullanilanlar.php",
              type:"POST",
              data:"durum=sik_kullanilanlar&ad="+urlAdi+"&adres="+urlAdres,
              success:function(res){
    
              },
              error:function(ult){
                  alert("error");
              },
              complete:function(result){
                
              }
          }); // AJAX END
              });
              

            });//$(document).ready(function($)
})(jQueryFavori);


</script>
    
        <style>
    #isreal{
        font-size: 20px;
		font-weight: normal;
		line-height: 1.4em;
		margin: 0.25em 0 0;
		padding: 0 0 4px;
		text-shadow: 1px 1px 0 white;
		border-bottom: 1px dotted #cccccc;
		color:#333333;
	}
    
    </style>  
</head>
<body>
  
 <?php
 include './sidebarr.php'; 
 include_once '../VTYS-CONNECT.php';
 
 ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
 <div class="col-lg-8 col-lg-offset-2">
      
       <div class="panel panel-default">
                  <div class="panel-heading" style="background-color:#313F47;">
                    <h3 class="panel-title" style="color:white;">Favori Linkini Ekle</h3>
                  </div>
                  <div class="panel-body">
                
                      <div class="box-shadow big-box">
            <h4><strong></strong></h4>
            <label> <h3>Link Adı</h3> </label>
            <input id="URLAdi" class="form-control material input-lg example-item" type="text" placeholder="Örnegin : Mynet Haber Sitesi"/>
            <label><h3>Site URL </h3> </label>
            <input id="URLAdres" class="form-control material input-lg example-item" type="text" placeholder="Örneğin :www.mynet.com"/>
              <button id="FavorilerURLEkle" class="btn btn-warning btn-lg text-uppercase waves pull-right">Sık Kullanılanlara Ekle</button>
       </div>
                  </div>
                </div>
  
           
         
     
     
      
     <br>
 </div>
            <div class="col-lg-5 col-lg-offset-2">
                <h2>Favori Siteler</h2>
                <?php 
                
                $queryCon = "SELECT * FROM sahsi_yonetim_sik_kullanilanlar";
                   $gonder = mysql_query($queryCon);
                   
                   while($qu = mysql_fetch_array($gonder)){
                   ?>
                <label> 
                    <a id="isreal" href="<?= $qu[2]; ?>"><?= $qu[1]; ?></a>
                </label>
                <hr/>
                
                <?php
                   }//WHILE
                ?>
                
            </div>
        </div>
   
     <?php 
     
     if(isset($_POST["durum"])){
         $site_Adi = mysql_real_escape_string($_POST["ad"]);
         $site_URL = mysql_real_escape_string($_POST["adres"]);
         $site_Eklenme = time();
         
         $queryINSERT = "INSERT INTO sahsi_yonetim_sik_kullanilanlar (site_adi,site_url,ekleme_tarihi)"
                 . " VALUES ('$site_Adi','http://$site_URL','$site_Eklenme')";
         
         mysql_query($queryINSERT);
         
         
     }
     
     ?>
            
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
