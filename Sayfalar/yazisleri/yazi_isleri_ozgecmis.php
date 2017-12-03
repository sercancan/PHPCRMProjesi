      <!DOCTYPE html>
<html lang="en" class="no-js">
  <?php require './LNKLER.php'; ?>
    
    <script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="../../Eklentiler/jquery-ui.min.js" type="text/javascript"></script>
    
    <link href="../../Eklentiler/summernote/dist/summernote.css" rel="stylesheet" type="text/css"/>
    <script src="../../Eklentiler/summernote/dist/summernote.min.js" type="text/javascript"></script>
    
  <script>
        var jQueryEditorSummernote = $.noConflict(true);
    
(function($) {
$(document).ready(function($) {
                $('#summernoteEgitimModal').summernote({
        height: 120,
        toolbar: [
          //[groupname, [button list]]

          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
        ]
      });  //  $('#summernoteEgitim').summernote({
      
                 $('#summernoteDeneyim').summernote({
        height: 120,
        toolbar: [
          //[groupname, [button list]]

          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
        ]
      });  //  $('#summernoteDeneyim').summernote({
      
              $('#summernoteDeneyimModal').summernote({
        height: 120,
        toolbar: [
          //[groupname, [button list]]

          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
        ]
      });  //  $('#summernoteDeneyimModal').summernote({



         $('#summernoteYetkinliklerModal').summernote({
        height: 120,
        toolbar: [
          //[groupname, [button list]]

          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
        ]
      });  //  $('#summernoteYetkinliklerModal').summernote({
      
         $('#summernoteProjelerModal').summernote({
        height: 120,
        toolbar: [
          //[groupname, [button list]]

          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
        ]
      });  //  $('#summernoteProjelerModal').summernote({
      
      
        $("#ButtonEkbilgilerEKLE").click(function(){
            
         var SigaraDurumID = $("#SigaraDurum").val();
         var KanGrubuID = $("#KanGrubu").val();
         var UyeTopluluk = $("#UyeTopluluklar").val();
         var Hobiler = $("#Hobiler").val();
         
          var EkBilgiRequest = new Object();
              EkBilgiRequest.Durum = "EkBilgiEkle";
              EkBilgiRequest.SigaraID = SigaraDurumID;
              EkBilgiRequest.KanID = KanGrubuID;
              EkBilgiRequest.UyeTopluluk = UyeTopluluk;
              EkBilgiRequest.Hobiler = Hobiler;
             
              
              var resultingParams = $.param(EkBilgiRequest);
              alert(resultingParams);
         
       $.ajax({
           url:"sahsi_yonetim_ozgecmis.php",
           method:"POST",
           data:resultingParams,
           success:function(data){
           //   alert(data);
           },
           error:function(data){
               
           }
       }); //  $.ajax({ END
        });//  $("#ButtonEkbilgilerEKLE").click END
      
     $("#ButtonProjelerEkle").click(function(){
         
         var Projeler = $("#summernoteProjelerModal").val();
        
            var ProjeObjesi = new Object();
                ProjeObjesi.Durum = "ProjelerEkle";
                ProjeObjesi.Projeler = Projeler;
                
         var ResultProje = $.param(ProjeObjesi);
          //  alert(ResultProje);
           
         $.ajax({
             url:"sahsi_yonetim_ozgecmis.php",
             method:"POST",
             data:ResultProje,
             success:function(dt){
                 alert(dt);
             },
             error:function(Hu){
                 
             }
         });//AJAX END
     });// $("#ButtonProjelerEkle").on("click");
      
      $("#ButtonYetkinlikEkle").on("click",function(){
            
            var Yetkinlikler = $("#summernoteYetkinliklerModal").val();
            
            
               var YetkinlikObjesi = new Object();
                   YetkinlikObjesi.Durum = "YetkinlikEkle";
                   YetkinlikObjesi.Yetkinlik = Yetkinlikler;
                
         var ResultYetkinlik = $.param(YetkinlikObjesi);
         
           
         $.ajax({
             url:"sahsi_yonetim_ozgecmis.php",
             method:"POST",
             data:ResultYetkinlik,
             success:function(dt){
                // alert(dt);
             },
             error:function(Hu){
                 
             }
         });//AJAX END
            
            
      }); //      $("ButtonYetkinlikEkle").on("click");
           
           });//$(document).ready(function($)
})(jQueryEditorSummernote);


  </script>
</head>
<body>
  
 <?php
 include './sidebarr.php';
 require_once '../VTYS-CONNECT.php';
 ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
 <div class="col-lg-10 col-lg-offset-1">
     
   
         <div class="panel panel-default">
             <div class="panel-heading clearfix"><b style="font-size:20px;">
                     <i class="fa fa-phone"></i> İletişim Bilgileri</b>
    				<div class="pull-right">
                                      <button type="button" class="btn btn-warning waves-effect waves-light"
                           data-toggle="modal" data-target="#con-close-modal">
                           <i class="glyphicon glyphicon-option-vertical" aria-hidden="true"></i>
                                      </button>  
                                    
   	<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse01"
    		aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
    				</div>
    			</div>
    			<div class="panel-body collapse" id="collapse01">
                        
                              <div class="row">
                                <div class="col-lg-6">
                                     <label for="adim"><b>Adım</b> </label>      
      
                                       <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1" style="background:#313F47;">
                                               <i class="glyphicon glyphicon-user" style="color:white;"></i></span>
                     <input id="adim" type="text" class="form-control" placeholder="isim" aria-describedby="basic-addon1">
                                        </div>         
                                </div>
      
                                <div class="col-lg-6">
                                     <label for="soyadim"><b>Soyadım</b> </label>      
                                              <input type="text" class="form-control"  id="soyadim" />
                                </div>
                           
                          
                                <div class="col-lg-6">
                                     <label for="unvan"><b>Ünvanım</b> </label>      
    			<input type="text" class="form-control" id="unvan" />
                        
                                </div>
                            
                           
                                <div class="col-lg-6">
                                    <label for="ulke"><b>Ülke</b> </label>      
    			
                               <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1" style="background:#313F47;">
                                               <i class="glyphicon glyphicon-flag" style="color:white;"></i></span>
                     <input id="ulke" type="text" class="form-control" placeholder="Türkiye" aria-describedby="basic-addon1">
                               </div> 
                                </div>
                            
                           
                                <div class="col-lg-6">
                                    <label for="sehir"><b>Şehir</b> </label>      
    			
                            <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1"style="background:#313F47;">
                                               <i class="glyphicon glyphicon-map-marker" style="color:white;"></i></span>
                     <input id="sehir" type="text" class="form-control" placeholder="Yaşadığınız Şehir" aria-describedby="basic-addon1">
                               </div> 
                                </div>
                            
                           
                                <div class="col-lg-6">
                                    <label for="ilce"><b>İlçe</b> </label>      
    			<input type="text" class="form-control" id="ilce" />
                                </div>
                           
                           
                                <div class="col-lg-6">
                                    <label for="semt"><b>Semt</b> </label>      
    			<input type="text" class="form-control" id="semt" />
                                </div>
                           
                            
                                <div class="col-lg-6">
                                    <label for="cep1"><b>Cep Telefonu</b> </label>      
    			
                        <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1" style="background:#313F47;">
                                               <i class="glyphicon glyphicon-phone" style="color:white;"></i></span>
                     <input id="cep1" type="text" class="form-control" placeholder="0555-555-55-55" aria-describedby="basic-addon1">
                               </div> 
                                </div>
                            
                           
                                <div class="col-lg-6">
                                    <label for="cep2"><b>Cep Telefonu 2</b> </label>      
    			
                          <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1" style="background:#313F47;">
                                               <i class="glyphicon glyphicon-phone" style="color:white;"></i></span>
                     <input id="cep2" type="text" class="form-control" placeholder="0123-456-78-91" aria-describedby="basic-addon1">
                               </div> 
                                </div>
                            
                           
                                <div class="col-lg-6">
                                    <label for="adim"><b>Elektronik Posta :</b> </label>      
                                    
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"style="background:#313F47;">
                              <i style="color:white;">@</i></span>
                          <input id="eposta" type="text" class="form-control" placeholder="mail@mail.com" aria-describedby="basic-addon1">
                           </div> 
                                </div>
                            </div>
                          
                                
                            </div>
                                </div> <!-- ILETISIM PANEL -->      
         <div class="panel panel-default">
             <div class="panel-heading clearfix"><b style="font-size:20px;">
                     <i class="fa fa-user"></i> Kişisel Bilgileri</b>
    				<div class="pull-right">
                                      <button type="button" class="btn btn-warning waves-effect waves-light"
                           data-toggle="modal" data-target="#con-close-modal1">
                           <i class="glyphicon glyphicon-option-vertical" aria-hidden="true"></i>
                                      </button>  
                                    
   	<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse02"
    		aria-expanded="false" aria-controls="collapse02"><i class="fa fa-bars"></i></button>
    				</div>
    			</div>
    			<div class="panel-body collapse" id="collapse02">
                          
                           <div class="row">
                                                           
                                <div class="col-lg-6">
                                    
                                    <label>Cinsiyetim :</label>
                                    <input type="radio"  name="Cinsiyet" />Erkek
                                    <input type="radio" name="Cinsiyet" />Kadın
                                </div>
                                
                                <div class="col-lg-6">
                                    <label>Doğum Tarihi :</label>
                                    <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1">
                                               <i class="glyphicon glyphicon-calendar"></i></span>
                     <input id="dogumtarihi" 
                            type="text"
                            class="form-control" 
                            placeholder="gün/ay/yıl"
                            aria-describedby="basic-addon1" />
                               </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Doğum Yeri : </label>
                                   
                                    <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1">
                                               <i class="glyphicon glyphicon-dashboard"></i></span>
                     <input id="dogumyeri" type="text" class="form-control"
                            placeholder="Isparta/Senirkent,Muğla/Aksaz vs."
                            aria-describedby="basic-addon1"/>
                               </div>
                                </div>
                                <div class="col-lg-6">
                                     <label>Medeni Durum :</label>
                                    <input type="radio" name="MedeniDurum" />Evli
                                    <input type="radio" name="MedeniDurum" />Bekar
                                </div>
                                
                                                            
                                  <div class="col-lg-6">
                                      <label>Askerlik Durumu : </label>
                                      <select class="form-control">
                                          <option value="" disabled selected>Seçiniz</option>
                                          <option>Yapıldı</option>
                                          <option>Yapılmadı</option>
                                          <option>Muaf</option>
                                          <option>Tecilli</option>    
                                          <option>Yapılıyor</option>
                                      </select>
                                  </div>
                                <div class="col-lg-6">
                                       <label>Sürücü Belgesi :</label>
                                    <input type="radio" name="surucubelge" />Var
                                    <input type="radio" name="surucubelge" />Yok
                                </div>
                            
                                  
                                                        </div> <!--ROW -->
                                
                            </div>
                                </div> <!-- KİSİŞSEL PANEL -->                                      
         <div class="panel panel-default">
             <div class="panel-heading clearfix"><b style="font-size:20px;">
                     <i class="glyphicon glyphicon-education"></i> Eğitim Bilgileri</b>
    				<div class="pull-right">
                                      <button type="button" class="btn btn-warning waves-effect waves-light"
                           data-toggle="modal" data-target="#con-close-modal3">
                           <i class="glyphicon glyphicon glyphicon-option-vertical" aria-hidden="true"></i>
                                      </button>  
                                    
   	<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse03"
    		aria-expanded="false" aria-controls="collapse03"><i class="fa fa-bars"></i></button>
    				</div>
    			</div>
    			<div class="panel-body collapse" id="collapse03">
                           
                           <div class="row">
                                                           
                                                            <div class="col-lg-9">
                                    <label><b>Eğitim Seviyesi :</b></label>
                                 
            <select class="form-control">
              <option value="" disabled selected>Seçiniz</option>
              <option value="onlisans">Ön Lisans</option>
              <option value="lisans">Lisans</option>
              <option value="yukseklisans">Yüksek Lisans</option>
              <option value="doktora">Doktora</option>
            </select> 
        
                                </div>
                                 <div class="col-lg-7">
                                     <label><b>Üniversite Adı :</b></label>
                                     <input type="text"  class="form-control"/>
                                </div>
                                <div class="col-lg-7">
                                    <label><b>Şehir :</b></label>
                                    <input type="text"  class="form-control"/>
                                </div>
                                <div class="col-lg-7">
                                    <label><b>Fakülte Adı :</b></label>
                                    <input type="text"  class="form-control"/>
                                </div>
                                <div class="col-lg-7">
                                    <label><b>Bölüm Adı :</b></label>
                                    <input type="text"  class="form-control"/>
                                </div>
                               <div class="col-lg-7">
                                    <label><b>Lise :</b></label>
                                     <input type="text"  class="form-control"/>
                                </div>
                                <div class="col-lg-7">
                                    <label><b>Orta Öğretim :</b></label>
                                      <input type="text"  class="form-control"/>
                                </div>
                                <div class="col-lg-12">
                                    <label><b>Eklemek İstediğiniz Notlar :</b></label>
                                      <div id="summernoteEgitimModal"></div> <!-- Not Editor-->
                                </div>
                               
                               
                                  </div>
                                
                            </div>
                                </div> <!-- EGITIM PANEL -->                             
         <div class="panel panel-default">
             <div class="panel-heading clearfix"><b style="font-size:20px;">
                     <i class="glyphicon glyphicon-blackboard"></i> İş Deneyimleri</b>
    				<div class="pull-right">
                                      <button type="button" class="btn btn-warning waves-effect waves-light"
                           data-toggle="modal" data-target="#con-close-modal4">
                           <i class="glyphicon glyphicon-option-vertical" aria-hidden="true"></i>
                                      </button>  
                                    
   	<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse04"
    		aria-expanded="false" aria-controls="collapse04"><i class="fa fa-bars"></i></button>
    				</div>
    			</div>
    			<div class="panel-body collapse" id="collapse04">
                           
                            
                            <div class="row">
                                <div class="col-lg-11">
                                    
                                     <div id="summernoteDeneyimModal"></div> <!-- Not Editor-->
                                </div>
                            </div>
                                
                            </div>
                                </div> <!-- İş Deneyimleri PANEL -->            
         <div class="panel panel-default">
             <div class="panel-heading clearfix"><b style="font-size:20px;">
                     <i class="glyphicon glyphicon-grain"></i> Yetkinlikler</b>
    				<div class="pull-right">
                                      <button type="button" class="btn btn-warning waves-effect waves-light"
                           data-toggle="modal" data-target="#con-close-modal5">
                           <i class="glyphicon glyphicon-option-vertical" aria-hidden="true"></i>
                                      </button>  
                                    
   	<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse05"
    		aria-expanded="false" aria-controls="collapse05"><i class="fa fa-bars"></i></button>
    				</div>
    			</div>
    			<div class="panel-body collapse" id="collapse05">
                            
                            
                              <div class="row">
                                                            <div class="col-lg-12">
                                                                <label>Yetkinlikleriniz (Bilgisayar,Sertifika,Program) vb.</label>
                                                                <textarea id="summernoteYetkinliklerModal"></textarea>
                                                            </div>
                                                        </div>
                                
                            </div>
                                </div> <!-- YETKINLIKILER PANEL -->                   
         <div class="panel panel-default">
             <div class="panel-heading clearfix"><b style="font-size:20px;">
                     <i class="glyphicon glyphicon-certificate"></i> Projeler</b>
    				<div class="pull-right">
                                      <button type="button" class="btn btn-warning waves-effect waves-light"
                           data-toggle="modal" data-target="#con-close-modal6">
                           <i class="glyphicon glyphicon-option-vertical" aria-hidden="true"></i>
                                      </button>  
                                    
   	<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse06"
    		aria-expanded="false" aria-controls="collapse06"><i class="fa fa-bars"></i></button>
    				</div>
    			</div>
    			<div class="panel-body collapse" id="collapse06">
                            
                             <div class="row">
                                                            <div class="col-lg-12">
                                                                <label>Projeleriniz Hakkında Kısa Bilgi :</label>
                                                                <textarea rows="80" cols="40" id="summernoteProjelerModal"></textarea>
                                                            </div>
                                                        </div>
                         
                                
                            </div>
                                </div> <!-- PROJELER PANEL -->           
         <div class="panel panel-default">
             <div class="panel-heading clearfix"><b style="font-size:20px;">
                     <i class="glyphicon glyphicon-pencil"></i> Ek Bilgiler</b>
    				<div class="pull-right">
                                      <button type="button" class="btn btn-warning waves-effect waves-light"
                           data-toggle="modal" data-target="#con-close-modal7">
                           <i class="glyphicon glyphicon-option-vertical" aria-hidden="true"></i>
                                      </button>  
                                    
   	<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse07"
    		aria-expanded="false" aria-controls="collapse07"><i class="fa fa-bars"></i></button>
    				</div>
    			</div>
    			<div class="panel-body collapse" id="collapse07">
                            
                         <div class="row">
                                                            <div class="col-lg-10">
                                                               
                                                                <label for="Hobiler">Hobiler/İlgi Alanları :</label>
                                                                <textarea id="Hobiler" rows='10' cols="40"></textarea>
                                                            </div>
                                                            <div class="col-lg-10">
                                                               
                                                                <label for="UyeTopluluklar">Üye Olunan Topluluklar :</label>
                                                                <textarea id="UyeTopluluklar" rows="10" cols="40"></textarea>
                                                            </div>
                                                            <div class="col-lg-10">
                                                               
                                                                <label for="KanGrubu">Kan Grubu :</label>
                                                                
                                                                <select id="KanGrubu" class="form-control">
                                                                    <option>Seçiniz</option>
                                                                    <option value="0">A Rh(+)</option>
                                                                     <option value="1">A Rh(-)</option>
                                                                      <option value="2">B Rh(+)</option>
                                                                       <option value="3">B Rh(-)</option>
                                                                       <option value="4">AB Rh(+)</option>
                                                                        <option value="5">AB Rh (-)</option>
                                                                         <option value="6">0 Rh(+)</option>
                                                                          <option value="7">0 Rh(-)</option>
                                                                </select>
                                                            </div>
                                                             <div class="col-lg-10">
                                                               
                                                                <label for="SigaraDurum">Sigara Kullanımı :</label>
                                                                
                                                                <select id="SigaraDurum" class="form-control">
                                                                    <option>Seçiniz</option>
                                                                    <option value="0">Sigara Kullanıyorum</option>
                                                                     <option value="1">Sigara Kullanmıyorum</option>
                                                                     
                                                                </select>
                                                            </div>
                                                            </div>
                                
                            </div>
                                </div> <!-- EKBILGILER PANEL -->     
   </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 pull-right">
                <div class="btn btn-warning btn-lg">Bilgileri Kayıt Et</div>
            </div>
        </div>
      </div>
     
     <!-- MODAL  ILETISIM START -->
                       
                  <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header" style="background:#313F47;"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button> 
                                                        <h4 class="modal-title" style='color:white;font-weight: bold;'>İletişim Bilgileri Düzenle</h4> 
                                                    </div> 
                                                    <div class="modal-body">
                    <div class="row">
                                <div class="col-lg-6">
                                     <label for="adim"><b>Adım</b> </label>      
      
                                       <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1" style="background:#313F47;">
                                               <i class="glyphicon glyphicon-user" style="color:white;"></i></span>
                     <input id="adim" type="text" class="form-control" placeholder="isim" aria-describedby="basic-addon1">
                                        </div>         
                                </div>
      
                                <div class="col-lg-6">
                                     <label for="soyadim"><b>Soyadım</b> </label>      
                                              <input type="text" class="form-control"  id="soyadim" />
                                </div>
                           
                          
                                <div class="col-lg-6">
                                     <label for="unvan"><b>Ünvanım</b> </label>      
    			<input type="text" class="form-control" id="unvan" />
                        
                                </div>
                            
                           
                                <div class="col-lg-6">
                                    <label for="ulke"><b>Ülke</b> </label>      
    			
                               <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1" style="background:#313F47;">
                                               <i class="glyphicon glyphicon-flag" style="color:white;"></i></span>
                     <input id="ulke" type="text" class="form-control" placeholder="Türkiye" aria-describedby="basic-addon1">
                               </div> 
                                </div>
                            
                           
                                <div class="col-lg-6">
                                    <label for="sehir"><b>Şehir</b> </label>      
    			
                            <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1"style="background:#313F47;">
                                               <i class="glyphicon glyphicon-map-marker" style="color:white;"></i></span>
                     <input id="sehir" type="text" class="form-control" placeholder="Yaşadığınız Şehir" aria-describedby="basic-addon1">
                               </div> 
                                </div>
                            
                           
                                <div class="col-lg-6">
                                    <label for="ilce"><b>İlçe</b> </label>      
    			<input type="text" class="form-control" id="ilce" />
                                </div>
                           
                           
                                <div class="col-lg-6">
                                    <label for="semt"><b>Semt</b> </label>      
    			<input type="text" class="form-control" id="semt" />
                                </div>
                           
                            
                                <div class="col-lg-6">
                                    <label for="cep1"><b>Cep Telefonu</b> </label>      
    			
                        <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1" style="background:#313F47;">
                                               <i class="glyphicon glyphicon-phone" style="color:white;"></i></span>
                     <input id="cep1" type="text" class="form-control" placeholder="0555-555-55-55" aria-describedby="basic-addon1">
                               </div> 
                                </div>
                            
                           
                                <div class="col-lg-6">
                                    <label for="cep2"><b>Cep Telefonu 2</b> </label>      
    			
                          <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1" style="background:#313F47;">
                                               <i class="glyphicon glyphicon-phone" style="color:white;"></i></span>
                     <input id="cep2" type="text" class="form-control" placeholder="0123-456-78-91" aria-describedby="basic-addon1">
                               </div> 
                                </div>
                            
                           
                                <div class="col-lg-6">
                                    <label for="adim"><b>Elektronik Posta :</b> </label>      
                                    
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"style="background:#313F47;">
                              <i style="color:white;">@</i></span>
                          <input id="eposta" type="text" class="form-control" placeholder="mail@mail.com" aria-describedby="basic-addon1">
                           </div> 
                                </div>
                            </div>
                            <div class="row">
                                <br/>
                                <div class="col-lg-2 pull-right">
                                    <div class="btn btn-warning btn-lg">Kayıt</div>
                                </div>
                            </div>                                      
                                                                
                       
                                                            </div> <!--MODAL-BODY -->
                                                         </div>
                                                   </div>
                                                </div>
         
           <!-- MODAL OZGEMICS ITELISIM END -->
    
 <!-- MODAL  KİSİSEL START -->
                       
                   <div id="con-close-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header" style="background:#313F47;"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button> 
                                                        <h4 class="modal-title" style='color:white;font-weight: bold;'>Kişisel Bilgileri Düzenle</h4> 
                                                    </div> 
                                                    <div class="modal-body">
                                                        <div class="row">
                                                           
                                <div class="col-lg-6">
                                    
                                    <label>Cinsiyetim :</label>
                                    <input type="radio"  name="Cinsiyet" />Erkek
                                    <input type="radio" name="Cinsiyet" />Kadın
                                </div>
                                
                                <div class="col-lg-6">
                                    <label>Doğum Tarihi :</label>
                                    <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1">
                                               <i class="glyphicon glyphicon-calendar"></i></span>
                     <input id="dogumtarihi" 
                            type="text"
                            class="form-control" 
                            placeholder="gün/ay/yıl"
                            aria-describedby="basic-addon1" />
                               </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Doğum Yeri : </label>
                                   
                                    <div class="input-group">
                                           <span class="input-group-addon" id="basic-addon1">
                                               <i class="glyphicon glyphicon-dashboard"></i></span>
                     <input id="dogumyeri" type="text" class="form-control"
                            placeholder="Isparta/Senirkent,Muğla/Aksaz vs."
                            aria-describedby="basic-addon1"/>
                               </div>
                                </div>
                                <div class="col-lg-6">
                                     <label>Medeni Durum :</label>
                                    <input type="radio" name="MedeniDurum" />Evli
                                    <input type="radio" name="MedeniDurum" />Bekar
                                </div>
                                
                                                            
                                  <div class="col-lg-6">
                                      <label>Askerlik Durumu : </label>
                                      <select class="form-control">
                                          <option value="" disabled selected>Seçiniz</option>
                                          <option>Yapıldı</option>
                                          <option>Yapılmadı</option>
                                          <option>Muaf</option>
                                          <option>Tecilli</option>    
                                          <option>Yapılıyor</option>
                                      </select>
                                  </div>
                                <div class="col-lg-6">
                                       <label>Sürücü Belgesi :</label>
                                    <input type="radio" name="surucubelge" />Var
                                    <input type="radio" name="surucubelge" />Yok
                                </div>
                            
                                  
                                                        </div> <!--ROW -->
                            <div class="row">
                                <br/>
                                <div class="col-lg-2 pull-right">
                                    <div class="btn btn-warning btn-lg">Kayıt</div>
                                </div>
                            </div>                                      
                                                                
                       
                                                            </div> <!--MODAL-BODY -->
                                                         </div>
                                                   </div>
                                                </div>
 <!-- MODAL  KİSİSEL END -->

           
           <!-- MODAL  EGITIM START -->
                       
                   <div id="con-close-modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header" style="background:#313F47;"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button> 
                                                        <h4 class="modal-title" style='color:white;font-weight: bold;'>Egitim Bilgileri Düzenle</h4> 
                                                    </div> 
                                                    <div class="modal-body">
                                                        <div class="row">
                                                           
                                                            <div class="col-lg-9">
                                    <label><b>Eğitim Seviyesi :</b></label>
                                 
            <select class="form-control">
              <option value="" disabled selected>Seçiniz</option>
              <option value="onlisans">Ön Lisans</option>
              <option value="lisans">Lisans</option>
              <option value="yukseklisans">Yüksek Lisans</option>
              <option value="doktora">Doktora</option>
            </select> 
        
                                </div>
                                 <div class="col-lg-7">
                                     <label><b>Üniversite Adı :</b></label>
                                     <input type="text"  class="form-control"/>
                                </div>
                                <div class="col-lg-7">
                                    <label><b>Şehir :</b></label>
                                    <input type="text"  class="form-control"/>
                                </div>
                                <div class="col-lg-7">
                                    <label><b>Fakülte Adı :</b></label>
                                    <input type="text"  class="form-control"/>
                                </div>
                                <div class="col-lg-7">
                                    <label><b>Bölüm Adı :</b></label>
                                    <input type="text"  class="form-control"/>
                                </div>
                               <div class="col-lg-7">
                                    <label><b>Lise :</b></label>
                                     <input type="text"  class="form-control"/>
                                </div>
                                <div class="col-lg-7">
                                    <label><b>Orta Öğretim :</b></label>
                                      <input type="text"  class="form-control"/>
                                </div>
                                <div class="col-lg-12">
                                    <label><b>Eklemek İstediğiniz Notlar :</b></label>
                                      <div id="summernoteEgitimModal"></div> <!-- Not Editor-->
                                </div>
                               
                               
                                  </div>
                            <div class="row">
                                <br/>
                                <div class="col-lg-3 pull-right">
                                    <div class="btn btn-warning btn-lg">Güncelle</div>
                                </div>
                            </div>                                      
                                                                
                       
                                                            </div> <!--MODAL-BODY -->
                                                         </div>
                                                   </div>
                                                </div>    
           <!-- MODAL  EGITIM END -->
           
              <!-- MODAL  ISDENEYIMLERI START -->
                       
                                        <div id="con-close-modal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header" style="background:#313F47;"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button> 
                                                        <h4 class="modal-title" style='color:white;font-weight: bold;'>İş Deneyimleri Düzenle</h4> 
                                                    </div> 
                                                    <div class="modal-body">
                                                   Isdeneyim
                                               <div id="summernoteDeneyimModal"></div> <!-- Not Editor-->
                                                         
                            <div class="row">
                                <br/>
                                <div class="col-lg-3 pull-right">
                                    <div class="btn btn-warning btn-lg">Güncelle</div>
                                </div>
                            </div>                                      
                                                                
                       
                                                            </div> <!--MODAL-BODY -->
                                                         </div>
                                                   </div>
                                                </div>
                                                      
                                        
           <!-- MODAL ISDENEYIMLERI END -->
           
                <!-- MODAL  YETKINLIKLER START -->
                       
                                        <div id="con-close-modal5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header" style="background:#313F47;"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button> 
                                                        <h4 class="modal-title" style='color:white;font-weight: bold;'>Yetkinlik Bilgileri Düzenle</h4> 
                                                    </div> 
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label>Yetkinlikleriniz (Bilgisayar,Sertifika,Program) vb.</label>
                                                                <textarea id="summernoteYetkinliklerModal"></textarea>>
                                                            </div>
                                                        </div>
                            <div class="row">
                                
                                
                                <div class="col-lg-2 pull-right">
                                    <div id="ButtonYetkinlikEkle" class="btn btn-warning btn-lg">Ekle</div>
                                </div>
                            </div>                                      
                                                                
                       
                                                            </div> <!--MODAL-BODY -->
                                                         </div>
                                                   </div>
                                                </div>    
           <!-- MODAL  YETKINLIKLER END -->
           
           <?php
           
           
             if(!empty($_POST["Durum"]) AND $_POST["Durum"] === "YetkinlikEkle")
            {
                $Yetkinlikler = $_REQUEST["Yetkinlik"];
                
                $INSERTQuery_Yetkinliks = "INSERT INTO ozgecmis_yetkinlikler (yetkinlik_bilgi,Kullanici_id) "
                                    . "VALUES"
                                    . "('$Yetkinlikler','1')";
                
                            mysql_query($INSERTQuery_Yetkinliks);
                            
                
            }
           ?>
              <!-- MODAL  PROJELER START -->
                       
                                        <div id="con-close-modal6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header" style="background:#313F47;"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button> 
                                                        <h4 class="modal-title" style='color:white;font-weight: bold;'>Projeler Bilgileri Düzenle</h4> 
                                                    </div> 
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label>Projeleriniz Hakkında Kısa Bilgi :</label>
                                                                <textarea rows="80" cols="40" id="summernoteProjelerModal"></textarea>
                                                            </div>
                                                        </div>
                            <div class="row">
                                
                                
                                <div class="col-lg-2 pull-right">
                                    <div id="ButtonProjelerEkle" class="btn btn-warning btn-lg">Ekle</div>
                                </div>
                            </div>                                      
                                                                
                       
                                                            </div> <!--MODAL-BODY -->
                                                         </div>
                                                   </div>
                                                </div>    
           <!-- MODAL  PROJELER END -->
           
           <?php 
            if(!empty($_POST["Durum"]) AND $_POST["Durum"] === "ProjelerEkle")
            {
                $Projeler = $_REQUEST["Projeler"];
                
                $INSERTQuery_Projes = "INSERT INTO ozgecmis_projeler (proje_bilgi,Kullanici_id) "
                                    . "VALUES"
                                    . "('$Projeler','1')";
                
                            mysql_query($INSERTQuery_Projes);
                            
                
            }
           
           ?>
           
              <!-- MODAL  EKBILGILER START -->
                       
                                        <div id="con-close-modal7" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header" style="background:#313F47;"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button> 
                                                        <h4 class="modal-title" style='color:white;font-weight: bold;'>Ek Bilgileri Düzenle</h4> 
                                                    </div> 
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-10">
                                                               
                                                                <label for="Hobiler">Hobiler/İlgi Alanları :</label>
                                                                <textarea id="Hobiler" rows='10' cols="40"></textarea>
                                                            </div>
                                                            <div class="col-lg-10">
                                                               
                                                                <label for="UyeTopluluklar">Üye Olunan Topluluklar :</label>
                                                                <textarea id="UyeTopluluklar" rows="10" cols="40"></textarea>
                                                            </div>
                                                            <div class="col-lg-10">
                                                               
                                                                <label for="KanGrubu">Kan Grubu :</label>
                                                                
                                                                <select id="KanGrubu" class="form-control">
                                                                    <option>Seçiniz</option>
                                                                    <option value="0">A Rh(+)</option>
                                                                     <option value="1">A Rh(-)</option>
                                                                      <option value="2">B Rh(+)</option>
                                                                       <option value="3">B Rh(-)</option>
                                                                       <option value="4">AB Rh(+)</option>
                                                                        <option value="5">AB Rh (-)</option>
                                                                         <option value="6">0 Rh(+)</option>
                                                                          <option value="7">0 Rh(-)</option>
                                                                </select>
                                                            </div>
                                                             <div class="col-lg-10">
                                                               
                                                                <label for="SigaraDurum">Sigara Kullanımı :</label>
                                                                
                                                                <select id="SigaraDurum" class="form-control">
                                                                    <option>Seçiniz</option>
                                                                    <option value="0">Sigara Kullanıyorum</option>
                                                                     <option value="1">Sigara Kullanmıyorum</option>
                                                                     
                                                                </select>
                                                            </div>
                                                            </div>
                                                        </div>
                            <div class="row">
                                
                                
                                <div class="col-lg-2 pull-right">
                                    <div id="ButtonEkbilgilerEKLE" class="btn btn-warning btn-lg">Ekle</div>
                                </div>
                                <br>
                            </div>                                      
                                                                
                       
                                                            </div> <!--MODAL-BODY -->
                                                         </div>
                                                   </div>
                                                </div>    
           <!-- MODAL  EKBILGILER END -->
           
           <?php 
           if(isset($_POST["Durum"]) && $_REQUEST["Durum"] == "EkBilgiEkle"){
                  
                   $Hobis = strip_tags($_REQUEST["Hobiler"]);
                   $Topluluk= mysql_real_escape_string($_POST["UyeTopluluk"]);
                   $KanGrubu = mysql_real_escape_string($_REQUEST["KanID"]);
                   $SigaraDurumu = strip_tags($_POST["SigaraID"]);
               
               $INSERTQuery_Ekbilgiler = "INSERT INTO ozgecmis_ekbilgiler"
                                        . "(Hobiler,Topluluklar,KanGrubu_id,Sigara_id) "
                                        . "VALUES"
                                        . "('$Hobis','$Topluluk','$KanGrubu','$SigaraDurumu')";
           
                mysql_query($INSERTQuery_Ekbilgiler);
                
               
           }
 
           
           ?>
 

                </body>
  </html>
