  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
   
  <?php
    require 'LNKLER.php'; 
   include_once "../VTYS-CONNECT.php";
  ?>
    

  
<!-- BUTTON VE ICONS ICIN LIBRARY -->

<link href="../../CSSS/personel-yonetim-yazisleri.css" rel="stylesheet" type="text/css"/>
       <link type="text/css" href="../../CSSS/themify-icons/themify-icons.css" rel="stylesheet" />  
       
       <script src="../../JSS/personel-codes.js" type="text/javascript"></script>

     
</head>
<body >
  
 <?php include 'sidebarr.php'; ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
            <div class="col-lg-6 col-lg-offset-1">
                <div id="wrapper">
  <div class="overlay"></div>
 
  <!-- Page Content -->
  <div id="page-content-wrapper">
  
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
              <h1 class="page-header" style="color:black;">PERSONEL Yönetimi</h1>
           
          
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 col-md-4 col-sm-4 col-sx-12">
                     <div class="container">
                         
                        <section >
        <div class="container">
            <div class="row">
                <div class="board">
                  
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="welcome">
                      <span class="round-tabs one">
                              <i class="fa fa-pie-chart"></i>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="profile">
                     <span class="round-tabs two">
                         <i class="fa fa-bar-chart-o"></i>
                     </span> 
           </a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="bootsnipp goodies">
                     <span class="round-tabs three">
                          <i class="fa fa-child"></i>
                     </span> </a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="blah blah">
                         <span class="round-tabs four">
                              <i class="fa fa-cloud-upload"></i>
                         </span> 
                     </a></li>

                     <li><a href="#doner" data-toggle="tab" title="completed">
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-plus"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home" style="background-color:#F1F4F5;">

                          
                          <p class="narrow text-center" style="color:black;">
                          
                                <div id="chartbox" style="width:600px;height:450px;"></div>
                                
                          </p>
                          
                        
                          
                      </div>
                      <div class="tab-pane fade active" id="profile" style="background-color:#F1F4F5;">
                         
                          <p class="narrow text-center" style="color:black;">
                     <div class="container">
                      
                               <div id="tke" style="width:900px;height:350px;"></div>
         
                        <input type="button" class="btn btn-primary" value="Küçükten Büyüğe(Rakam)" onclick="myBarChart.sort('#rakam#','asc');">
                        <input type="button" class="btn btn-danger" value="Büyükten Küçüğe(Rakam)" onclick="myBarChart.sort('#rakam#','desc');">
                        <input type="button" class="btn btn-success" value="Küçükten Büyüğe (Yıl)" onclick="myBarChart.sort('#yil#','asc');">
                        <input type="button" class="btn btn-default" value="Büyükten Küçüğe (Yıl)" onclick="myBarChart.sort('#yil#','desc');">
                        
                          
                    </div>
                         </p>     
                      </div>
                      <div class="tab-pane fade" id="messages" style="background-color:#F1F4F5;">
                         
                          <p class="narrow text-center" style="color:black;">
                                 <div class="container">   
                    <div class="row">
			<div class="col-md-9">
				<div class="panel panel-warning">
					<div class="panel-heading panhead">
						<h3 class="panel-title">Personel Bilgi Sistemi</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Sakla" data-container="body">
								
							</span>
						</div>
					</div>
					<div class="panel-body">
						Aranacak Kişi 
                        <input type="text" class="form-control" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Aranacak Bilgi" />
					</div>
					<table class="table table-hover" id="task-table">
						<thead>
							<tr>
								<th>Numara</th>
								<th>Ad Soyad</th>
                                                                <th>E-Mail</th>
                                                                <th>Adres</th>
                                                                <th>Cep Telefonu</th>
                                                                <th>Medeni Durum</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
                                                                <td ><a href="yazi_isleri_personel-cv-goster.php" style="color:black;">Sercan Göger</a></td>
                                                                <td><a href='yazi_isleri_mail_gonder.php?MailAdresi=sercan.goger@mynet.com'> sercan.goger@gmail.com</a></td>
                                                                <td>Turgut Reis mah.karaosmanoğlu Cad.</td>
                                                                <td>0538 577 55 58</td>
                                                                 <td>Bekar</td>
							</tr>
                                                        <tr>
								<td>2</td>
								<td>Çağlar Ölçücü</td>
                                                                <td><a href='yazi_isleri_mail_gonder.php'> caglar@gmail.com</a></td>
                                                                <td>Turgut Reis mah.karaosmanoğlu Cad.</td>
                                                                <td>0538 665 96 31</td>
                                                                 <td>Nişanlı</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> 
                          </p>
                          
                         
                          
                      </div>
                      <div class="tab-pane fade" id="settings" style="background-color:#F1F4F5;">
                        
                          <p class="narrow text-center" style="color:black;">
                          <div class="container-fluid">
                             <div class="panel panel-default" >
                        <div class="panel-heading" style="background:#313F47;">
                          <h3 class="panel-title" style="color:white;">Dosya Yükle</h3>
                        </div>
                        <div class="panel-body">
                        <form action="personel-birimi-dosyaYukle.php" class="dropzone decoration" id="my-awesome-dropzone">
                      </form>
                        </div>
                          <div class="panel-footer">
                              <p class="text text-danger"><b>NOT :</b>Dosya ve Klasör Yüklemek İçin Kutucuk Ortasına Sürükle bırak veya yazının üstüne Tıkla.<b>!</b>   </p>
                          </div>
                      </div>
                          </div>
                          </p>
                         
                        
                      </div>
                      <div class="tab-pane fade" id="doner" style="background-color:#F1F4F5;">
  <div class="text-center">
    <i class="img-intro icon-checkmark-circle"></i>
</div>

<p class="narrow text-center" style="color:black;">
    <div class="container-fluid">
                                      
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
       </div> 
      
        
       
     <!--  <a class="btn btn-danger btn-lg pull-right" href="#">Personel Girişi</a> -->
       
       <!--  <a href="#" class="btn btn-inverse-alt btn-lg btn-block"><i class="ti ti-pencil"></i></a> -->
         <a href="#" class="btn btn-warning-alt btn-lg btn-block"><i class="fa fa-check"></i></a>
        </div>
    </div>                    
      
</div>
</p>

</div>
<div class="clearfix"></div>
</div>

</div>
</div>
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
     

 
 

 
</body>
  </html>
