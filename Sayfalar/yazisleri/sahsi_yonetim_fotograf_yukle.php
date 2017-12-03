  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php 
  session_start();
  require './LNKLER.php'; 
  
  ?>     
<script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="../../Eklentiler/jquery-ui.min.js" type="text/javascript"></script>

    <style>    
        .isaretle{
            background-color:black;
        }
   </style>
          
<script>
        var jQueryKlasorIslemleri = $.noConflict(true);
    
(function($) {
    
$(document).ready(function(){
   
    
    $("#btnKlasorOlustur").click(function(){

	var Klasorismi = $("#KlasorOlusturTXT").val();
        
                        $.ajax({
              url:"sahsi_yonetim_fotograf_yukle.php",
              type:"POST",
              data:"KlasorOlustur="+Klasorismi,
              success:function(res){
                  //alert("başar");
              },
              error:function(ult){
                  alert("error");
              },
              complete:function(result){
                
              }
          }); // AJAX END
               
});//click Klasor Oluştur 


$(document).on("click",".direcorying",function(){
    //ISARETLEME ISLEMI BURDA YANI SECME ISLEMI KLASOR SECME
    $(this).toggleClass("isaretle");
    
    var YuklenecekKlasor = $(this).text();
      var  Secilmis = YuklenecekKlasor.replace(/(<([^>]+)>)/ig,"").trim();
        
   // $("#klasorismi").text(Secilmis);
    
           $.ajax({
              url:"sahsi_yonetim_fotograf-yukle-DosyaYukle.php",
              type:"POST",
              data:"durum="+Secilmis,
              success:function(res){
                  //  alert(res);
              },
              error:function(ult){
                  alert("error");
              },
              complete:function(result){
                
              }
          }); // AJAX END

});//$(document).on("click",".direcorying",function(){ ISARETLENEN KLASOR



}); //$(document).ready(function(){


})(jQueryKlasorIslemleri);

</script>
</head>
<body>
  
 <?php 
 
 include './sidebarr.php'; 
 include "../VTYS-CONNECT.php";
 ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
 <div class="col-lg-8 col-lg-offset-2">
       <div class="panel panel-default" >
                        <div class="panel-heading" >
                          <h3 class="panel-title" >Resim Yükleme Merkezi</h3>
                        </div>
                        <div class="panel-body">
                        <form action="sahsi_yonetim_fotograf-yukle-DosyaYukle.php" class="dropzone decoration" id="my-awesome-dropzone">
                      </form>
                        </div>
                          <div class="panel-footer">
                              <p class="text text-danger"><b>NOT :</b>Dosya ve Klasör Yüklemek İçin Kutucuk Ortasına Sürükle bırak veya yazının üstüne Tıkla.<b>!</b>   </p>
                          </div>
     </div> <!-- PANEL DEFAULT -->
                       <div id="ajaxdanGelenVeri"></div>
                      
                       <div id="klasorismi"></div>
                       
 </div><!-- col-lg-8 -->
            <div class='col-lg-10'>
                

                   
           
            </div>
 
            <div class="col-lg-8 col-lg-offset-2">

                 <div class="panel panel-default">
             <div class="panel-heading clearfix"><b style="font-size:20px;">
                     <i class="glyphicon glyphicon-flash"></i> Albüm Klasörleriniz </b>
    				<div class="pull-right">
                                    
        
                                    
                                     <div class='btn btn-warning btn-lg' style='color:white'
                            lass="btn btn-default"
                            data-toggle="modal"
                            data-target="#modalKlasorOlustur"> <i class='glyphicon glyphicon-folder-open'></i>
                                     </div>
        <button class="btn btn-dark btn-lg" type="button" data-toggle="collapse" data-target="#collapse07"
            aria-expanded="false" aria-controls="collapse07">
            <i class="fa fa-bars"></i>
        </button>
   	
    				</div>
    			</div>
    			<div class="panel-body collapse" id="collapse07">
                           
                            <?php 
                            
                            include_once 'fonksiyons.php';
                              
                              GLOB_ile_Klasorleri_Listeleme();
                              
                             ?>
                                
                            </div>
                                </div> <!-- YUKLU KLASORLER PANEL -->     
                
            </div>   
            
        </div>
        
        <!-- KLASOR OLUSTUR MODAL START -->
        <div class="modal fade" id="modalKlasorOlustur" tabindex="-1" role="dialog" aria-labelledby="modalBasicLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="modalBasicLabel">Klasör İşlemleri</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p> 
                                                <b>Albümün İçin Klasör Oluştur</b>
                                            </p>
                                        <input type='text' id='KlasorOlusturTXT' class='form-control' placeholder='klasor ismi' />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                            <button id='btnKlasorOlustur' type="button" class="btn btn-warning">Oluştur</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
        <!-- KLASOR OLUSTUR MODAL END -->
        
        <?php 
            if(isset($_POST["KlasorOlustur"])){
               
                chdir("albums"); //VAR OLAN DİZNİ albums yaparak onun içinde oluşturduk
                
                $klasorIsmi = strip_tags($_POST["KlasorOlustur"]);
                mkdir("$klasorIsmi");
      }//İF END
      
      if(isset($_POST["IsaretlenenKlasor"])){
          $YuklenecekKlasor = strip_tags($_POST["IsaretlenenKlasor"]);
          
          chdir("albums/$YuklenecekKlasor");
          echo $YuklenecekKlasor;
                 
      }//if end
        
        
        ?>
        <div id="hataAL"></div>
       <!-- RENKLI KUTUCUKLAR START-->
       <!--
      <div class="row">
        
        <div class="col-lg-3">
          <div class="content-box biggest-box blue-bg">
            <div class="pull-left">
              <span class="block">Meclis Birimi</span>
              <h1 class="text-uppercase zero-m">287 Dosya</h1>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="content-box biggest-box green-bg">
            <div class="pull-left">
              <span class="block">Visitors</span>
              <h1 class="text-uppercase zero-m">19,594,958</h1>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="content-box biggest-box red-bg">
            <div class="pull-left">
              <span class="block">Sales</span>
              <h1 class="text-uppercase zero-m">$274,392,374</h1>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="content-box biggest-box yellow-bg">
            <div class="pull-left">
              <span class="block">Visitors</span>
              <h1 class="text-uppercase zero-m">19,594,958</h1>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
        -->
        <!-- RENKLI KUTUCUKLAR END-->
           <!-- LISTE START-->
          <!--
      <div class="row">
        <div class="col-lg-6">
         
          <div class="content-box box-shadow big-box todo-list">

            <div class="sort-todo">
              <a class="all-todo" href="#">All</a>
              <a class="active-todo" href="#">Active <span class="badge yellow-bg"></span></a>
              <a class="complete-todo" href="#">Complete <span class="badge red-bg"></span></a>
              <a class="archive-todo" href="#">Archive <span class="badge green-bg"></span></a>
            </div>

            <form id="add_todo" method="post">
              <div class="form-group add-todo">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-pencil green"></i></div>
                  <input type="text" class="form-control name-of-todo" placeholder="Write here your to do item">
                </div>
              </div>
            </form>

            <div class="panel">
              <div class="panel-body todo">
                <ul class="list-group">
                  <li class="list-group-item list-success">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"/>
                        <i></i>
                       <span>Searches</span>
                      </label>
                    </div>
                    <div class="pull-right action-btns">
                      <a class="archive"><span class="fa fa-archive"></span></a>
                      <a class="trash"><span class="fa fa-close"></span></a>
                    </div>
                  </li>
                  <li class="list-group-item  list-danger">
                    <div class="checkbox">
                      <label>
                       <input type="checkbox"/>
                       <i></i>
                       <span>Marketing</span>
                      </label>
                    </div>
                    <div class="pull-right action-btns">
                      <a class="archive"><span class="fa fa-archive"></span></a>
                      <a class="trash"><span class="fa fa-close"></span></a>
                    </div>
                  </li>
                  <li class="list-group-item  list-warning checked-todo">
                    <div class="checkbox">
                      <label>
                       <input type="checkbox"checked/>
                       <i></i>
                       <span>Links</span>
                      </label>
                    </div>
                    <div class="pull-right action-btns">
                      <a class="archive"><span class="fa fa-archive"></span></a>
                      <a class="trash"><span class="fa fa-close"></span></a>
                    </div>
                  </li>
                  <li class="list-group-item  list-info">
                    <div class="checkbox">
                      <label>
                       <input type="checkbox"/>
                       <i></i>
                       <span>E-mails</span>
                      </label>
                    </div>
                    <div class="pull-right action-btns">
                      <a class="archive"><span class="fa fa-archive"></span></a>
                      <a class="trash"><span class="fa fa-close"></span></a>
                    </div>
                  </li>
                  <li class="list-group-item  list-danger">
                    <div class="checkbox">
                      <label>
                      <input type="checkbox"/>
                       <i></i>
                       <span>Social Media</span>
                      </label>
                    </div>
                    <div class="pull-right action-btns">
                      <a class="archive"><span class="fa fa-archive"></span></a>
                      <a class="trash"><span class="fa fa-close"></span></a>
                    </div>
                  </li>
                  <li class="list-group-item  list-primary">
                    <div class="checkbox">
                      <label>
                       <input type="checkbox"/>
                       <i></i>
                       <span>Advertising</span>
                      </label>
                    </div>
                    <div class="pull-right action-btns">
                      <a class="archive"><span class="fa fa-archive"></span></a>
                      <a class="trash"><span class="fa fa-close"></span></a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="checkbox clear-todo pull-left">
              <label for="clear">
               <input type="checkbox" id="clear" />
               <i></i>
                Mark all as complete
              </label>
            </div>
            <button type="button" id="clear-comp" class="btn btn-warning waves text-uppercase pull-right">Clear Completed</button>


          </div>
           
        </div>
           -->
            <!-- LISTE END-->
            
             <!--CALENDAR START-->
          <!--
        <div class="col-lg-6">
         
          <div class="content-box">
            <div class="blue-bg big-box calendar text-center">
              <div class="content-title i-block">
                <h4 class="zero-m">Bugün</h4>
                <div class="content-tools i-block pull-right">
                  <a class="repeat-btn">
                    <i class="fa fa-repeat"></i>
                  </a>
                 
                  <a class="close-btn">
                    <i class="fa fa-times"></i>
                  </a>
                </div>
              </div>
              <div class="clearfix"></div>

              <div class="small-box">
                <div class="weekday"></div>
                <div class="date"></div>
                <div class="month-year"><span class="month"></span> / <span class="year"></span></div>
              </div>
            </div>

            <div class="big-box">
              <div id="calendar-widget"></div>
            </div>
          </div>
          
            
        </div>
            -->
            <!-- CALENDAR END-->
            
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
