  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require './LNKLER.php'; ?>
    
<script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>

    <!-- edıtor KUTUPHANELERİ -->
<script src="../../Eklentiler/Editor/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="../../Eklentiler/Editor/ckeditor/adapters/jquery.js"></script>
<script src="../../Eklentiler/Editor/tinymce/tinymce.min.js" type="text/javascript"></script>
         
<!-- BUTTON VE ICONS ICIN LIBRARY -->

<link href="../../CSSS/personel-yonetim-yazisleri.css" rel="stylesheet" type="text/css"/>
       <link type="text/css" href="../../CSSS/themify-icons/themify-icons.css" rel="stylesheet" />  
       
       
 <script>
    var jQueryRaporing = $.noConflict(true);
    
(function($) {
//CKEDITOR.disableAutoInline = true;

		$( document ).ready( function() {
                   /*  var  editori;
                        $("#iguita").click(function(){
                            
                                     editori = $("#alinacakyer").val();
            $.ajax({
              url:"ckeditor-gelen-veri.php",
              type:"POST",
              data:"veri="+editori,
              success:function(res){
                    
                    alert(res);
                   $("#kosan").html(res);
                 
              },
              error:function(ult){
                  alert("error");
              },
              complete:function(result){
                
              }
          }); // AJAX END
                
                        });//on CLICK
                   */
		}); //$( document ).ready( function() {

})(jQueryRaporing);

		

	</script>
</head>
<body>
  <?php require_once '../VTYS-CONNECT.php'; ?>
 <?php include './sidebarr.php'; ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
         <form action="#" method="POST">
             
             <textarea id="alinacakyer" name="text" class="ckeditor">
             </textarea>
                    <div id="kosan"></div>
 
            </div>
               <div class="col-lg-5 col-lg-offset-3">
 <br>
     <input  type="submit" id="iguita" value="Rapor oluştur"  class="btn btn-warning btn-lg btn-block" >
        <!-- <i style="color:white;" class="ti ti-pencil"></i> -->
     </input>
         
 
      </form>
                    
                    <?php 
                    if($_POST){
                       
                        $text = mysql_real_escape_string($_POST["text"]);
                        $zamanDamgasi = time();
                        $tarih = date("d/m/Y");
                      
                             //echo htmlspecialchars($text);
  $raporInsert = "INSERT INTO personelin_olusturdugu_raporlar "
          . "(olusturan_personel_id,raporlanan_veri,tarih_saat,tarih)"
          . " VALUES "
          . "('1','$text','$zamanDamgasi','$tarih')";
                                      
                              mysql_query($raporInsert);
                              
                          
                    }
                    
                    ?>
                </div>
   
     
      
        
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
