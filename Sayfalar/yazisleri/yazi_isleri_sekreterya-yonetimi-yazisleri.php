  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
   
    
  <?php include 'LNKLER.php'; 
 include_once "..//VTYS-CONNECT.php";
  ?>   
<script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="../../JSS/sekreterya-codes.js" type="text/javascript"></script>

<link href="../../CSSS/sekreterya-yonetimi-yazisleri.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  
 <?php include 'sidebarr.php'; ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
            <!--CANFEZA -->
            <!--Content-->
    <div id="content" class="content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h2>Sekreterya Yönetimi</h2>
           
            
          </div>
        </div>
      </div>
        <!-- tombul-->
        <div class="row">
            <div id="page-content-wrapper">
  
                
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
              <h1 class="page-header" style="color:black;">Sekreterya Yönetimi</h1>
           
          <div class="jquery-script-ads" style="margin:30px auto;">
              
              
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 col-md-4 col-sm-4 col-sx-12">
                     <div class="container">
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Kayıtlı Kişiler">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" >
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Ajanda">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#step3"  data-toggle="tab" aria-controls="step3" role="tab" title="Rehbere Kayıt">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-tree-deciduous"></i>
                            </span>
                        </a>
                    </li>
                     <li role="presentation">
                        <a href="#step4"  data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-leaf"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1" style="background-color:#F1F4F5;">
                      <!--TAB 1 START -->             
<div class="container filterable">
	<div class="row">
        <div class="col-lg-10 col-md-9">
        <h4>REHBER</h4>
        <div class="table-responsive">
             <div class="pull-right">
                    <button class="btn btn-danger btn-lg btn-filter"><span class="glyphicon glyphicon-filter"></span>Seçenekli Arama</button>
                </div>
                <!-- TABLO BİLGİLERİ START -->
              <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                    <tr class="filters">
                        
                        <th><input type="text" class="form-control" placeholder="Ad" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Soyad" disabled></th>
                        <th><input type="text" class="form-control" placeholder="E-mail" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Telefon" disabled></th>
                        
                    </tr>
                </thead>
    <tbody>
        <?php 
            $sorgu = mysql_query("SELECT * FROM yazi_isleri_rehber LIMIT 15");
            
            while($veriCek = mysql_fetch_object($sorgu)){
                
            ?>
 <tr>
    
     <td><?= ucfirst($veriCek->ad);?></td>
     <td><?= ucfirst($veriCek->soyad); ?></td>
     <td><a href='yazi_isleri_mail_gonder.php?MailAdresi=<?= $veriCek->email; ?>'><?= $veriCek->email; ?></a></td>
     <td><?= $veriCek->telefon; ?></td>
     
    <td id="ids" hidden><?= $veriCek->id; ?></td>
     
    <td>
       
        <p data-placement="top" data-toggle="tooltip" title="Duzenle">
            <button id="duzenleModalButton" 
          data-id="<?php echo $veriCek->id; ?>" 
          data-ad="<?= $veriCek->ad; ?>" 
          data-soyad="<?= $veriCek->soyad; ?>"
          data-mail="<?= $veriCek->email; ?>"
          data-tel="<?= $veriCek->telefon; ?>"                                      
                        class="btn btn-warning btn-xs" data-title="Duzenle" data-toggle="modal" data-target="#duzenle" >
                <span class="glyphicon glyphicon-pencil"></span>
              
            </button>
        </p>
    </td>
    <td>
        <p data-placement="top" data-toggle="tooltip" title="Sil">
            <button id="SilModalButton" data-id="<?= $veriCek->id; ?>"
                    class="btn btn-danger btn-xs" data-title="Sil" data-toggle="modal" data-target="#sil" >
                <span class="glyphicon glyphicon-trash"></span>
            </button>
        </p>
    </td>
    </tr>
      <?php
         }//while END
         mysql_free_result($sorgu);
        ?>
    </tbody>
        
</table>
                  <!-- TABLO BİLGİLERİ END -->
                  
                  
<div class="clearfix"></div>
<!-- SAYFALAMA START -->
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
<!-- SAYFALAMA END -->                
            </div>
            
        </div>
	</div>
</div>
                      
<!-- Duzenleme Detay MODAL START -->
<div class="modal fade" id="duzenle" tabindex="-1" role="dialog" aria-labelledby="duzenle" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
        <h4 class="modal-title custom_align" id="Heading">Düzenleme Detay</h4>
      </div>
          <div class="modal-body">
              
               <input class="form-control " id="cekilenId" type="hidden"  placeholder="Çekilecek İD"/>
          <div class="form-group">
        <input class="form-control " id="cekilenAd" type="text"  placeholder="Çekilecek Ad">
        </div>
              
        <div class="form-group">
        <input class="form-control " id="cekilenSoyad" type="text"  placeholder="Çekilecek Soyad">
        </div>
              
        <div class="form-group">
        <input class="form-control " id="cekilenMail" type="text" placeholder="Çekilecek Mail">
        </div>
              
        <div class="form-group">
        <textarea rows="2" class="form-control" id="cekilenTelefon" placeholder="Çekilecek Telefon"></textarea>
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" id="GuncelleModalButonu" data-dismiss="modal" style="width: 100%;">
            <span class="glyphicon glyphicon-ok-sign"></span> Güncelle
        </button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    <!-- Duzenleme Detay MODAL END -->
    
    <!-- SİL MODAL START -->
    <div class="modal fade" id="sil" tabindex="-1" role="dialog" aria-labelledby="duzenle" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
        <h4 class="modal-title custom_align" id="Heading">Silme İşlemi</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger">
           <span class="glyphicon glyphicon-warning-sign"></span> 
           Kayıtlı Bilgiyi Silmek İstediğiniden Eminmisiniz ?
       </div>
       
      </div>
        <div class="modal-footer ">
        <button id="SilModalButonuEVET" type="button" class="btn btn-success" data-dismiss="modal" >
            <span class="glyphicon glyphicon-ok-sign"></span> Evet 
        </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Hayır
        </button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
  
    <!-- SIL MODAL END -->
                       <!-- TAB 1 END -->
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2" style="background-color:#F1F4F5;">
                        <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
				<div class="callout-mage text-center fade-in-b">
					<h1>Randevu Takip  <b>Yönetim</b> Sistemi <a href="../../Eklentiler/AJANDA/emlak_calendar.php" class="btn btn-warning">Uygulama</a></h1>
					
                                        <p>Randevu Yönetim sistemi bütünleşik bir sistem olarak geliştirildiğinden bu uygulmaya ulaşmak için <strong>"Uygulama"</strong> Butonuna Tıklayınız</p>
                                </div>
                            </div>
			</div>
                        </div>
                     
  
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3" style="background-color:#F1F4F5;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="container-fluid">
                                      
                                    
                                    <label  for="inputAd">Ad</label>
                                    <input type="text" id="inputAd" name="ad" class="form-control" />
                                   
                                  
                                    <label  for="inputSoyad">Soyad</label>
                                    <input type="text" id="inputSoyad" name="soyad" class="form-control" aria-describedby="helpBlock"/>
                                    
                                   
                                    <label  for="inputMail">E-Mail</label>
                                    <input type="text" id="inputEmail" name="mail" class="form-control" aria-describedby="helpBlock" placeholder="mail@mail.com"/>
                                    
                                   
                                    <label for="inputTelefon">Telefon No</label>
                                    <input type="text" id="inputTelefon" name="telefon" class="form-control" aria-describedby="helpBlock" placeholder="(0123-456-78-90)"/>
                                    
                                     
                                         <br>
                                         <button id="VeriKaydetButonu"  class="btn btn-danger  pull-right ">Rehbere Kaydet <span class="fa fa-user"></span></button>

                                         <br><br>
                                         <!-- GIZLLENMIS SEKILDE BEKLIYO. REHBERDE EKSIK BILGI GIRILIRSE HATA VERICEK -->
                                   <!-- <div class="alert alert-danger" id="MesajGoruntulemeHATA" hidden>
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                      ×</button>
                                        <span class="glyphicon glyphicon-ok"></span> <strong>Eksik Bilgi.</strong>
                                      <hr class="message-inner-separator">
                                            <p  id="DurumMesajiHATA" style="color:black;font-weight:bold;"> </p>
                              
                                    </div>  -->
                                        
                                              <!-- GIZLLENMIS SEKILDE BEKLIYO. REHBERE BAŞARILI SEKILDE GIRILDIGINDE MESAJ VERICEK-->
                                             <!--
                                    <div class="alert alert-success" id="MesajGoruntulemeBASARI" hidden>
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                      ×</button>
                                        <span class="glyphicon glyphicon-ok"></span> <strong>Eksik Bilgi.</strong>
                                      <hr class="message-inner-separator">
                                            <p  id="DurumMesajiBASARI" style="color:black;font-weight:bold;"> </p>
                              
                                    </div> 
                                              -->
                                              <div id="DurumMesajGoruntuleme"></div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
     
                    <div class="clearfix"></div>
                
                     <div class="tab-pane" role="tabpanel" id="step4" style="background-color:#F1F4F5;">
                        <h3 style="color:black;"> Step 4</h3>
                        
                    </div>
                    
            </form>
        </div>
    </section>
   </div>
</div>
  </div>
                  </div>
              </div>
          </div> 
        </div>
      </div>
    </div>
            
        </div>
       
            </div>









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
