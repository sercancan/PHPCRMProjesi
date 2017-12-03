  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require './LNKLER.php'; ?>
<script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>

<link href="../../Eklentiler/jquery-magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
<script src="../../Eklentiler/jquery-magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
<style>
    #isreal{
        font-size: 26px;
		font-weight: normal;
		line-height: 1.4em;
		margin: 0.25em 0 0;
		padding: 0 0 4px;
		text-shadow: 1px 1px 0 white;
		border-bottom: 1px dotted #cccccc;
		color:#333333;
	}
    
        
    </style>
<script type="text/javascript">
    
      var jQueryAlbums = $.noConflict(true);
    
(function($) {
$(document).ready(function($) {
    
      /* MAGNIFIC POPUP */
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
                gallery: {
                            
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                                
			},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});
    
             
	

            });//$(document).ready(function($) {
})(jQueryAlbums);

		
	</script>
</head>
<body>
  
 <?php
    require '../VTYS-CONNECT.php';
 include './sidebarr.php'; 
 ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
 <div class="col-lg-9 col-lg-offset-1">
     
     <?php 
     $albums_resim = "";
       $bal = "albums";
        $dizi = array();
        
     chdir($bal);
        $viri = glob("*");
        foreach ($viri as $meta){
            if(is_dir($meta)){
                
               // echo "$meta <br>";
               array_push($dizi, $meta);
                
            } else{
            
              $albums_resim = $meta;
                ?>
              <div class="popup-gallery" >
	<a href="albums/<?php echo $albums_resim;?>" title="Photo 1">
            <img src="albums/<?php echo $albums_resim;?>" alt="" width="129" height="98"
                 style="float:left;padding:3px;margin:1px;"/>
        </a>
              </a>
	    </div>
      
          <?php 
        }//ELSE END
    }//foreach END
    ?>
 </div>
            
  <div class="col-lg-9 col-lg-offset-1">
     <?php
        for($m = 0; $m < count($dizi); $m++){ 
    ?>
  </div>
  <div class="col-lg-9 col-lg-offset-1">   
         <h1 id="isreal" ><?=  ucfirst($dizi[$m]) ." "; ?></h1>
  </div>
            
    <div class="col-lg-9 col-lg-offset-1">
     <?php
    $kore = opendir($dizi[$m]);
    while($veris = readdir($kore)){
        
        if($veris === "." OR $veris === ".."){
            continue;
        }
          ?>
              <div class="popup-gallery">
                 
	<a href="albums/<?php echo "$dizi[$m]/$veris";?>" title="Photo 1">
            <img src="albums/<?php echo "$dizi[$m]/$veris";?>" alt="" width="129" height="98"
                 style="float:left;padding:3px;margin:1px;"/>
        </a>
              </a>
	    </div>
      
          <?php 
         }//while END
         
         }//for ENDS
   
          ?>
     
   
 </div> <!-- COL-LG-9 -->
   </div> <!-- ROW -->
      </div> <!-- content -->
     
    


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
