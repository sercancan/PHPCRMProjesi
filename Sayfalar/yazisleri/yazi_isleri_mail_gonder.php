  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require './LNKLER.php'; ?>
<script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="../../Eklentiler/jquery-ui.min.js" type="text/javascript"></script>

 <link href="../../Eklentiler/pines-notify/pnotify.css" rel="stylesheet" type="text/css"/>
        <script src="../../Eklentiler/pines-notify/pnotify.min.js" type="text/javascript"></script>

<script>
    var jQueryMail = $.noConflict(true);
    
(function($) {
$(document).ready(function($) {
               
             $("#mailGonder").click(function(){
                 
                 var AliciMail = $("#aliciMail").val();
                 var GonderenMail = $("#gonderenMail").val();
                 var Konu = $("#Konu").val();
                 var Mesaj = $("#Mesaj").val();
            
                 $.ajax({
                     method:"POST",
                     url:"yazi_isleri_mail_gonder.php",
                     data:"MailGonder=MailGonderDurumu&Alici="+AliciMail+"&Gonderen="+GonderenMail+"&Konu="+Konu+"&Mesaj="+Mesaj,
                     success:function(result){
                       // $("#SonucGoster").html(result);
                        
                        new PNotify({title: 'E-Posta',text: 'Başarıyla Gönderildi.',
	icon: 'ti ti-check',  type: 'success',styling: 'fontawesome'
							});
                        
                         $("#aliciMail").val("");
                         $("#gonderenMail").val("");
                         $("#Konu").val("");
                         $("#Mesaj").val("");
                     },
                     error:function(d){
                           new PNotify({title: 'E-Posta',text: 'GONDERME HATASI...',
	icon: 'ti ti-check',  type: 'warning',styling: 'fontawesome'
							});
                     }
                 });//AJX END
                 
                 
                 
    
     
             });//CLİCK 
 
});	//document.ready
           
})(jQueryMail);


</script>      
</head>
<body>
  
 <?php include './sidebarr.php'; ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
             <div class="col-md-8 col-lg-9 col-lg-offset-1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="pull-right">
                                                <!--
                                                <button type="button" class="btn btn-purple waves-effect waves-light m-r-5">
                                                    <i class="fa fa-floppy-o"></i>
                                                </button>
                                                 -->
                                                <button type="button" class="btn btn-purple waves-effect waves-light m-r-5">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                               
                                                <button type="button" id='mailGonder' class="btn btn-warning  waves-effect waves-light"> <span>Gönder</span> <i class="fa fa-send m-l-10"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default m-t-20">
                                    <div class="panel-body p-t-30">
                                        
                                        <form role="form">
                                            <div class="form-group form-group-lg">
                                                <label style="color:black; font-weight: bold;">Alıcı :</label>
                                                <?php 
                                                       
                                                if(isset($_REQUEST["MailAdresi"])){
                                                    //Maile Tıklanarak Gonderilmiş bir Mail Adresi
                                                
                                                ?>
                                                <input id='aliciMail' type="text" class="form-control" value="<?= strip_tags($_GET["MailAdresi"]); ?>" placeholder="Alıcı">
                                                    <?php 
                                                }else{
                                                    ?>
                                                      <input id='aliciMail' type="text" class="form-control" placeholder="Alıcı">
                                                    <?php 
                                                }
                                                    ?>
                                            </div>
                                            <div class="form-group form-group-lg">
                                                 <label style="color:black; font-weight: bold;">Gönderen :</label>
                                               <input id="gonderenMail" type="text" class="form-control" value="sercan.goger@gmail.com" placeholder="Gönderen">
                                            </div>
                                            <div class="form-group form-group-lg">
                                                 <label style="color:black; font-weight: bold;">Konu Yaz :</label>
                                                <input id="Konu" type="text" class="form-control" placeholder="Konu">
                                            </div>
                                            <div class="form-group form-group-lg">
                                                 <label style="color:black; font-weight: bold;">Mesaj İleti :</label>
                                                <textarea id="Mesaj" class="wysihtml5 form-control" placeholder="Mesaj" style="height: 200px"></textarea>
                                            
                                            </div>
                                        </form>
                                    </div> <!-- panel -body -->
                                </div> <!-- panel -->
                            </div> <!-- End Rightsidebar -->
            
        </div>
        
        <?php
     

        if(isset($_POST["MailGonder"])){
            
            $Alici = $_POST["Alici"];
            $Gonderen = $_POST["Gonderen"];
            $Konu = $_POST["Konu"];
            $Mesaj = $_POST["Mesaj"];
            
            if(file_exists("./class.phpmailer.php"))
            {
                include './class.phpmailer.php'; //PHPMailer sinifimizi import ettik
                 include './class.pop3.php';
                  include './class.smtp.php';
            
$mail = new PHPMailer(); 


$mail->IsSMTP(); //Maili gonderecegimiz yolu belirledik
$mail->SMTPDebug = 1;// Debug islemi. 1 degeri hata ve mesaj icinken 2 degeri ile sadece mesaj olusturuluyor 
$mail->SMTPAuth = TRUE; //SMTP kimlik dogrulamayi etkinlestirdik
$mail->SMTPSecure = 'ssl'; //Guvenli baglanti icin ssl'i tercih ettim, 'tls' de kullanilabiliyor
$mail->Host = 'smtp.gmail.com'; //Gmail sunucusu uzerinden islem yapacagimi belirttim
$mail->Port = 465; //587 normal baglanti icin gerekli port numarasi, guvenli baglanti icin 465'i kullaniyoruz.
$mail->CharSet = 'UTF-8'; //Dil ayarlari icin UTF-8 i kullaniyoruz.
$mail->Username = $Gonderen; //mailin gonderilecegi adres
$mail->Password = 'abraskadabras744'; //mailin gonderildigi adresin sifresi
$mail->SetFrom($mail->Username, $Gonderen);
$mail->Subject = $Konu; //konu
$mail->AddAddress($Alici); //mailin gideceği adres
$mail -> MsgHTML($Mesaj); //mailin icerigi


//Asagıdaki kod blogunda mailin gonderilip gonderilmedigini kontrol ediyoruz. 

if(!$mail->Send())

{
    //echo "<h1>Mailer Error: ".$mail->ErrorInfo."</h1>";
    ?>
        <div id='flip'></div>
        <?php
}
else
{
    echo "<h1>Sent</h1>";
}
            
        }//include
        else{
            ECHO "<h1>PHP MAİLLER.php YOK</h1>";
        }
        
  }//POST MAİL GONDER BUTTON  
        
        ?>
        
        
        
        
       
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
