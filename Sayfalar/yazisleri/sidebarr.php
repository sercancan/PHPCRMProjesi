


 <div id="main-wrapper" class="main-wrapper" >

    <ul id="gn-menu" class="navbar gn-menu-main" >
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
                <a href="index.html" aria-expanded="true"><i class="fa fa-th"></i>Yazı İşleri Yönetimi
                    <span class="fa arrow"></span>
                       <span class="label label-danger pull-right">10</span>
                </a>
                <ul class="gn-submenu collapse" aria-expanded="true">
                  
                  <li><a class="active" href="index.php">Anasayfa</a></li>
           <li><a href="yazi_isleri_meclis-birimi.php">Meclis Birimi</a></li>
          <li><a href="yazi_isleri_encumen-birimi.php">Encümen Birimi</a></li>
          <li><a href="yazi_isleri_evlendirme-birimi.php">Evlendirme Birimi</a></li>
          <li><a href="yazi_isleri_arsiv-birimi.php">Arşiv Birimi</a></li>
          <li><a href="yazi_isleri_evrak-kayit-birimi.php">Evrak ve Kayıt Birimi</a></li>
          <li><a href="yazi_isleri_personel-yonetimi-yazisleri.php">Personel Yönetimi</a></li>
          <li><a href="yazi_isleri_sekreterya-yonetimi-yazisleri.php">Sekreterya Yönetimi</a></li>
             <li><a href="yazi_isleri_album.php">Fotoğraflar</a></li>
          <li><a href="yazi_isleri_rapor-olustur.php">Rapor oluştur</a></li>
          <li><a href="yazi_isleri_olusturulan_raporu_goruntuleme.php">Raporlama Servisi</a></li>
           <li><a href="yazi_isleri_chat_islemi.php">Anlık Mesajlaşma Servisi</a></li>
          
            
                </ul>
              </li>
              <li>
                <a href="#" aria-expanded="false"><i class="fa fa-briefcase"></i>Şahsi Yönetim
                    <span class="fa arrow"></span>
                       <span class="label label-warning pull-right">8</span>
                </a>
                <ul class="gn-submenu collapse" aria-expanded="false">
                 
                    <li><a href="sahsi_yonetim_album_goster.php">Aile Albüm</a></li>
                  <li><a href="sahsi_yonetim_fotograf_yukle.php">Fotoğraf Yükle</a></li>
                  <li><a href="sahsi_yonetimi_ajanda/sahsi_calendar.php">Not ve Hatirlatma</a></li>
                  <li><a href="sahsi_yonetim_editor.php">Editör</a></li>
                   <li><a href="sahsi_yonetim_sik_kullanilanlar.php">Sık Kullanılanlar</a></li>
                    <li><a href="sahsi_yonetim_ozgecmis.php">Öz Geçmiş</a></li>
                    <li><a href="sahsi_yonetim_aile_fertleri.php">Aile Fert Bilgileri</a></li>
                     <li><a href="sahsi_yonetim_rehber.php">Rehber</a></li>
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
        <span><?= date("H:i") ?></span>
      </li>
      <li class="container-fluid pull-right">
        <ul class="nav navbar-right right-menu">
          <li class="members-btn">
            <a class="show-members">
              <i class="fa fa-group"></i>
            </a>
          </li>
          
            
          <li class="dropdown notifications2">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i> <span class="label label-warning flashear">3</span>
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
              <li class="dropdown notifications" >
            <a class="dropdown-toggle" data-toggle="dropdown" >
              <i  class="fa fa-calendar"></i> <span class="label label-purple"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <h4 class="zero-m text-center "></h4>
              </li>
              <li>
                <div class="messages">
                  <div class="member-info">
               
                    <span class="member-name"></span>
                    <p class="members-message zero-m">
                      
                        <a href='#'>
                            <?php 
                            
                            setlocale(LC_ALL,'Turkish');
                            $gun = strftime("%A"); 
                           // echo $gun; 
              
        

                            ?>
                            </a>
                          
                    <div class="col-sm-6 col-lg-12">
              	<div class="info-tile info-tile-alt " style='background-color:purple;'>
				<div class="tile-icon">
                                    <div  class="ultra-widget" data-counter="65">
                            <div class="w-icon pull-right"><i class="fa fa-bell"></i></div>
                                </div>
                                    
                                     <span class="w-refresh w-p-icon">
                                       <i class="mdi mdi-calendar-clock"></i>
                                     </span>
                                </div>
				<div class="tile-heading" style='color:white;' ><span>Bugün</span></div>
				<div class="tile-body" style='color:white;'>
                                    <span ><?=  date("d.m.Y"); ?></span>
                                </div>          
			</div>
                    </div>
                    </p>
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
 
            </div> <!-- mian-warpper -->
          
        
       