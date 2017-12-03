  <!DOCTYPE html>
<html lang="en" class="no-js">


<!-- Mirrored from 91.234.35.26/renaissance-admin/v1.3.0/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2016 07:55:19 GMT -->
<head>
 <?= include 'LNKLER.php'; ?>
 
</head>


<body>
  <!--Preloader-->
  <div id="preloader" class="preloader table-wrapper">
    <div class="table-row">
      <div class="table-cell">
        <div class="la-ball-scale-multiple la-3x">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
  </div>
  <div id="main-wrapper" class="main-wrapper">

    <ul id="gn-menu" class="navbar gn-menu-main">
      <li class="gn-trigger">
        <a id="menu-toggle" class="menu-toggle gn-icon gn-icon-menu">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="cross">
            <span></span>
            <span></span>
          </div>
        </a>
        <nav class="gn-menu-wrapper">
          <div class="gn-scroller">
            <ul class="gn-menu metismenu">
            
                
              <li class="active">
                <a href="index.html" aria-expanded="true"><i class="fa fa-th"></i>Yazı İşleri Yönetimi<span class="fa arrow"></span></a>
                <ul class="gn-submenu collapse" aria-expanded="true">
                  
                  <li><a class="active" href="index.php">Anasayfa</a></li>
           <li><a href="meclis-birimi.php">Meclis Birimi</a></li>
          <li><a href="Sayfalar/yazisleri/encumen-birimi.php">Encümen Birimi</a></li>
          <li><a href="Sayfalar/yazisleri/encumen-birimi.php">Evlendirme Birimi</a></li>
          <li><a href="Sayfalar/yazisleri/arsiv-birimi.php">Arşiv Birimi</a></li>
          <li><a href="Sayfalar/yazisleri/evrak-kayit-birimi.php">Evrak ve Kayıt Birimi</a></li>
          <li><a href="Sayfalar/yazisleri/personel-yonetimi-yazisleri.php">Personel Yönetimi</a></li>
          <li><a href="Sayfalar/yazisleri/sekreterya-yonetimi-yazisleri.php">Sekreterya Yönetimi</a></li>
           
          
            
                </ul>
              </li>
              <li>
                <a href="#" aria-expanded="false"><i class="fa fa-briefcase"></i>Şahsi Yönetim<span class="fa arrow"></span></a>
                <ul class="gn-submenu collapse" aria-expanded="false">
                 
                  <li><a href="panels.html">a</a></li>
                  <li><a href="tabs.html">b</a></li>
                  <li><a href="media.html">c</a></li>
                 
                </ul>
              </li>
             
              <li>
                <a href="#" aria-expanded="false"><i class="fa fa-file"></i>Emlak İstimlak Yönetimi<span class="fa arrow"></span></a>
                <ul class="gn-submenu collapse" aria-expanded="false">
                  <li><a href="todo_list.html">a</a></li>
                  <li><a href="timeline.html">b</a></li>
                  <li><a href="contacts.html">c</a></li>
                  
                </ul>
              </li>
            </ul>
          </div>
          <!-- /gn-scroller -->
          <div class="bottom-bnts">
            <a class="profile" href="profile.html"><i class="mdi mdi-account"></i></a>
            <a class="fix-nav" href="#"><i class="mdi mdi-pin"></i></a>
            <a class="logout" href="#"><i class="mdi mdi-power"></i></a>
          </div>
        </nav>
      </li>
      
        
      <li class="top-clock">
        <span><?= date("H:i A") ?></span>
      </li>
      <li class="container-fluid pull-right">
        <ul class="nav navbar-right right-menu">
          <li class="members-btn">
            <a class="show-members">
              <i class="fa fa-group"></i>
            </a>
          </li>
          
            
          <li class="dropdown notifications">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i> <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <h4 class="zero-m text-center">Notifications</h4>
              </li>
              <li>
                <div class="messages">
                  <div class="member-info">
                    <img src="img/team/admin.png" alt="admin" class="img-circle pull-left">
                    <span class="member-name">Çağlar Ölçücü</span>
                    <p class="members-message zero-m">Bilgi Alanı Olucak</p>
                  </div>
                  
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown some-btn">
            <a class="fullscreen">
              <i class="mdi mdi-fullscreen"></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <!--Content-->
    <div id="content" class="content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h2>Anasayfa</h2>
           
            
          </div>
        </div>
      </div>
        <!-- KUTUCUKLAR START-->
        <!--
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="w-amount blue">28</span>
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
                    <div class="w-status-number pull-right text-uppercase">45%</div>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="col-sm-6 col-lg-3">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="w-amount green">154</span>
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
                    <span class="w-amount red">243</span>
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
                    <span class="w-amount yellow">753</span>
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
                    <span class="w-amount green">426</span>
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
                    <span class="w-amount dark">365</span>
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
     <!-- KUTUCAKLAR END-->
     
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
              <span class="block">Encümen Birimi</span>
              <h1 class="text-uppercase zero-m">198 Dosya</h1>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="content-box biggest-box red-bg">
            <div class="pull-left">
              <span class="block">Evrak Kayıt Birimi</span>
              <h1 class="text-uppercase zero-m">274 Dosya</h1>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="content-box biggest-box yellow-bg">
            <div class="pull-left">
              <span class="block">Personel Dosyaları</span>
              <h1 class="text-uppercase zero-m">195</h1>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      -->
        <!-- RENKLI KUTUCUKLAR END-->
      <div class="row">
        <div class="col-lg-6">
            <!-- LISTE START-->
          <!--
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
            -->
            <!-- LISTE END-->
        </div>
        <div class="col-lg-6">
            <!--CALENDAR START-->
          <!--
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
            -->
            <!-- CALENDAR END-->
            
        </div>
      </div>
       
     	
                  
        
            </div>
        </div>        
      <div class="row">
        
        <div class="col-lg-8">
            <!-- CHAT PANEL BAŞLANGIC-->
          <div class="content-box big-box chat">

            <div class="content-title i-block">
              <h4 class="zero-m">Personel İletişim Paneli</h4>
              <div class="content-tools i-block pull-right">
                <a class="repeat-btn">
                  <i class="fa fa-repeat"></i>
                </a>
                  <!--
                <a class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-chevron-down"></i>
                </a>
                  
                <ul class="dropdown-menu">
                  <li><a href="#">Config option 1</a></li>
                  <li><a href="#">Config option 2</a></li>
                </ul>
                  -->
                <a class="close-btn">
                  <i class="fa fa-times"></i>
                </a>
              </div>
            </div>

            <div class="box">
              <ul class="chat-double chat-container">
                <li class="chat-inverted">
                  <img src="img/team/member.png" class="img-circle user-avatar" alt="user">
                  <div class="chat-panel red-bg">
                    <div class="chat-heading clearfix">
                      <h4 class="pull-left zero-m">Soner Evcil</h4>
                      <p class="pull-right"><i class="fa fa-clock-o"></i>10:00</p>
                    </div>
                    <div class="chat-body">
                      <p>Kardeş payı kartal ali korumak maksat yok be oglum
                      güvenlik hesabı yoksa kimki onlarda paramı veriyor.</p>
                    </div>
                    <span class="readed"><i class="fa fa-check"></i></span>
                  </div>
                </li>
                  
                <li>
                  <img src="img/team/admin.png" class="img-circle user-avatar" alt="user">
                  <div class="chat-panel blue-bg">
                    <div class="chat-heading clearfix">
                      <h4 class="pull-left zero-m">Sinan Soylu</h4>
                      <p class="pull-right"><i class="fa fa-clock-o"></i>10:02</p>
                    </div>
                    <div class="chat-body">
                      <p>Süt gibi dumanı bu çek içe yada vur kalemi
                          bide sok ite tribine girerim ama.</p>
                    </div>
                    <span class="readed"><i class="fa fa-check"></i></span>
                  </div>
                </li>
              </ul>
            </div>

            <div class="input-group">
              <input type="text" class="form-control" placeholder="Mesaj giriniz.">
              <span class="input-group-btn">
                <button class="btn btn-warning  waves" type="button">Mesaj Yolla</button>
              </span>
            </div>
          </div>
                <!-- CHAR PANEL END-->
        </div>
      </div>

      <!--Footer-->
      <div class="footer">© 2016 Sercan Göger</div>
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

  </div>

    <div class="login-modal modal fade">
      <div class="table-wrapper">
        <div class="table-row">
          <div class="table-cell text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="login i-block">
              <div class="content-box">
                <div class="light-blue-bg biggest-box">

                  <h1 class="zero-m text-uppercase">Welcome</h1>

                </div>
                <div class="big-box text-left login-form">
                  <h4 class="text-center">Login</h4>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control material" id="login" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control material" id="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-block btn-info text-uppercase waves">Login</button>

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
                  <h3 class="zero-m text-uppercase">Do you want to exit?</h3>
                  <a href="#" class="i-block" data-dismiss="modal">Yes</a>
                  <a href="#" class="i-block" data-dismiss="modal">No</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

    <!--Scripts-->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <script src="bower_components/Waves/dist/waves.min.js"></script>
  <script src="bower_components/moment/min/moment.min.js"></script>
  <script src="bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
  <script src="bower_components/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js"></script>
  <script src="bower_components/cta/dist/cta.min.js"></script>
  
  <!--Menu-->
  <script src="js/menu/classie.js"></script>
  <script src="js/menu/gnmenu.js"></script>

  <!--Selects-->
  <script src="js/selects/selectFx.js"></script>

  <script src="js/jqueri_ui_custom/jquery-ui.min.js"></script>

  <!--Flot-->
  <script src="bower_components/flot/jquery.flot.js"></script>
  <script src="bower_components/flot/jquery.flot.resize.js"></script>
  <script src="bower_components/flot.curvedlines/curvedLines.js"></script>
  <script src="js/flot/jquery.flot.orderBars.js"></script>

  <!--Custom Flot Charts-->
  <script src="js/flot/line-chart-1.js"></script>
  <script src="js/flot/line-chart-2.js"></script>
  <script src="js/flot/line-chart-3.js"></script>
  <script src="js/flot/bar-chart.js"></script>

  <!--C3.js-->
  <script src="bower_components/d3/d3.min.js"></script>
  <script src="bower_components/c3/c3.min.js"></script>

  <!--EasyPieChart-->
  <script src="bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

  <!--Zabuto Calendar-->
  <script src="bower_components/zabuto_calendar/zabuto_calendar.min.js"></script>

    <!--Custom Scripts-->
  <script src="js/common.js"></script>



 


</body>


<!-- Mirrored from 91.234.35.26/renaissance-admin/v1.3.0/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2016 07:55:20 GMT -->
</html>
