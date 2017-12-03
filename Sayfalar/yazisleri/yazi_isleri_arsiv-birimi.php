  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require 'LNKLER.php'; ?>
        
     
     <script src="../../Eklentiler/uploader/arsiv.js" type="text/javascript"></script>
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
  
             
              <h1 class="page-header">Arşiv Birimi Dosya Yükleme Merkezi</h1>
          <div class="jquery-script-ads" style="margin:30px auto;">
              <script type="text/javascript">
</script>
          </div>

                      <div class="panel panel-default">
                        <div class="panel-heading"  style="background:#313F47;">
                          <h3 class="panel-title" style="color:white;">Dosya Yükle</h3>
                        </div>
                        <div class="panel-body">
                        <form action="yazi_isleri_arsiv-birimi-dosyaYukle.php" class="dropzone decoration" id="my-awesome-dropzone">
                      </form>
                        </div>
                          <div class="panel-footer">
                              <p class="text text-danger"><b>NOT :</b>Dosya ve Klasör Yüklemek İçin Kutucuk Ortasına Sürükle bırak veya yazının üstüne Tıkla.<b>!</b>   </p>
                          </div>
                      </div>
                       <div id="ajaxdanGelenVeri"></div>
                         <p><a class="btn btn-default btn-lg" href="raporlama.php?Birimadi=arsiv-birimi" role="button">Meclis Raporlama &raquo;</a></p>
            
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
     
      <div class="row">
        
        <div class="col-lg-8 col-lg-offset-4">
          <!--EKLERSİN BİŞEYLER SANA KALMIŞ -->
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
