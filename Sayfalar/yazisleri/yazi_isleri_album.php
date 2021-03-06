  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require './LNKLER.php'; ?>
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
      body{
                background-color: #152836
            }
            .demo-gallery > ul {
                margin-bottom: 0;
            }
            .demo-gallery > ul > li {
                float: left;
                margin-bottom: 15px;
                margin-right: 20px;
                width: 200px;
            }
            .demo-gallery > ul > li a {
                border: 3px solid #FFF;
                border-radius: 3px;
                display: block;
                overflow: hidden;
                position: relative;
                float: left;
            }
            .demo-gallery > ul > li a > img {
                -webkit-transition: -webkit-transform 0.15s ease 0s;
                -moz-transition: -moz-transform 0.15s ease 0s;
                -o-transition: -o-transform 0.15s ease 0s;
                transition: transform 0.15s ease 0s;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                height: 100%;
                width: 100%;
            }
            .demo-gallery > ul > li a:hover > img {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
                opacity: 1;
            }
            .demo-gallery > ul > li a .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.1);
                bottom: 0;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                -webkit-transition: background-color 0.15s ease 0s;
                -o-transition: background-color 0.15s ease 0s;
                transition: background-color 0.15s ease 0s;
            }
            .demo-gallery > ul > li a .demo-gallery-poster > img {
                left: 50%;
                margin-left: -10px;
                margin-top: -10px;
                opacity: 0;
                position: absolute;
                top: 50%;
                -webkit-transition: opacity 0.3s ease 0s;
                -o-transition: opacity 0.3s ease 0s;
                transition: opacity 0.3s ease 0s;
            }
            .demo-gallery > ul > li a:hover .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .justified-gallery > a > img {
                -webkit-transition: -webkit-transform 0.15s ease 0s;
                -moz-transition: -moz-transform 0.15s ease 0s;
                -o-transition: -o-transform 0.15s ease 0s;
                transition: transform 0.15s ease 0s;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                height: 100%;
                width: 100%;
            }
            .demo-gallery .justified-gallery > a:hover > img {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
                opacity: 1;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.1);
                bottom: 0;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                -webkit-transition: background-color 0.15s ease 0s;
                -o-transition: background-color 0.15s ease 0s;
                transition: background-color 0.15s ease 0s;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
                left: 50%;
                margin-left: -10px;
                margin-top: -10px;
                opacity: 0;
                position: absolute;
                top: 50%;
                -webkit-transition: opacity 0.3s ease 0s;
                -o-transition: opacity 0.3s ease 0s;
                transition: opacity 0.3s ease 0s;
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .video .demo-gallery-poster img {
                height: 48px;
                margin-left: -24px;
                margin-top: -24px;
                opacity: 0.8;
                width: 48px;
            }
            .demo-gallery.dark > ul > li a {
                border: 3px solid #04070a;
            }
            .home .demo-gallery {
                padding-bottom: 80px;
            }
			
    </style>
<script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="../../Eklentiler/jquery-ui.min.js" type="text/javascript"></script>


<link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet"/> 
           
</head>
<body class="demo-gallery">
   
 
 <?php
    require '../VTYS-CONNECT.php';
   // require 'sidebarr.php';
 ?>    
    
   
      <!--Content-->
    <div id="content" class="content container-fluid">
        <a href="index.php" class="btn btn-warning btn-lg pull-right">Sisteme Dönüş</a>
        <div class="row">
 <div class="col-lg-9 col-lg-offset-1">
             <div id="lightgallery">
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
                 
               <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"

                   data-src="albums/<?php echo $albums_resim;?>" 
                   data-sub-html="<h4>Muğla Açıkları</h4><p>Sevilen.</p><a class='pull-right'>Fotoğrafı Sil</a>"
                   data-pinterest-text="resim 1" 
                   data-tweet-text="share on twitter 1">
                    <a href="">
                        <img class="img-responsive" src="albums/<?php echo $albums_resim;?>" alt="Thumb-1" />
                    </a>
                   
             </div>
        
      
          <?php 
        }//ELSE END
    }//foreach END
    ?>
                  </div> <!-- light gallery -->
           
 </div>
   </div> <!-- ROW -->
      </div> <!-- content -->
     
    
                 <script src="../../Eklentiler/album-goster-jquery/picturefill.min.js"></script>
		<script src="../../Eklentiler/album-goster-jquery/lightgallery.js"></script>
		<script src="../../Eklentiler/album-goster-jquery/lg-pager.js"></script>
		<script src="../../Eklentiler/album-goster-jquery/lg-autoplay.js"></script>
		<script src="../../Eklentiler/album-goster-jquery/lg-fullscreen.js"></script>
		<script src="../../Eklentiler/album-goster-jquery/lg-zoom.js"></script>
		<script src="../../Eklentiler/album-goster-jquery/lg-hash.js"></script>
		<script src="../../Eklentiler/album-goster-jquery/lg-share.js"></script>
               
          <!--      
                 <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script> 
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script> 
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script> 
       <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script> 
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script> 
       <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script> 
       -->

 <script>
         //  var  num = document.getElementById("sayi").innerHTML;
            
             
      
          
            var jQueryYazisleriALBUM = $.noConflict(true);
    
(function($) {
$(document).ready(function($) {
               
        
        
          
          lightGallery(document.getElementById('lightgallery'));
            }); //$(document).ready(function($)
})(jQueryYazisleriALBUM);
        </script>	
		
     

</body>
  </html>
