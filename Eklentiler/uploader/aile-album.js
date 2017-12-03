
Dropzone.options.myAwesomeDropzone = {
          
       init:function(){
         
          // var eklenenDosyadi;
          // var SecilmisKlasor;
          var klasorismi = $("#klasorismi").text();
           
         this.on("addedfile",function(file){
             
          //    klasorismi = $("#klasorismi").text();
             
                   /*$.ajax({
                    url:"sahsi_yonetim_fotograf-yukle-DosyaYukle.php",
                   type:"POST",
                   data:"gul=KADER",
                   success:function(data){
                       $("#ajaxdanGelenVeri").html(data);
                   },
                   error:function(r){
                       alert(r);
                   }
               
        });//AJAX
        */

    });//addedfile
   /*
    
    $(document).on("click",".direcorying",function(){
    //ISARETLEME ISLEMI BURDA YANI SECME ISLEMI KLASOR SECME
    $(this).toggleClass("isaretle");
    
    var SecilmisKlasor = $(this).text();
var Secilmis = SecilmisKlasor.replace(/(<([^>]+)>)/ig,"").trim();
   

  
 });//$(document).on("click",".direcorying",function(){ ISARETLENEN KLASOR
    */
            this.on("removedfile",function(file){
               // alert("Silinen :"+file.name);

                 $.ajax({
                   type:"POST",
                   url:"yazi_isleri_personel-birimi-dosyaYukle.php",
                   data:{filename: file.name},
                   success:function(data,success){
                       $("#ajaxdanGelenVeri").html(data);
                   }
               
        });//AJAX
           
         });//removefile  
       }, //init
                
                  url:"sahsi_yonetim_fotograf-yukle-DosyaYukle.php",
                  acceptedFiles: "application/pdf,image/jpeg,.rar,.png,.gif,.jpg,.docx,.doc,.docm,.dotx,.xlsx,.xls,.pptx,.txt", //hangi tipte veriler ekleyebilir
		  maxFilesize: 250, // KAÇ  in MB
                //  maxFiles:4, //kac tane ekleyebilir
                 // dictMaxFilesExceeded:"4 Resimden Fazla Yükleme Sınırı.",
		 addRemoveLinks: true,
                 dictRemoveFile: "Sil",
                 dictCancelUpload:"Geri Çek",
                 dictCancelUploadConfirmation:"Yuklenmeden Cek",    
                   dictRemoveFileConfirmation: "Silme İstediğinizden Eminmisiniz ? ",
            
                
	success: function(file, response) {
		    	  //alert(response);
		    	},
	error: function(file, response) {
			   alert(response);
			    }
         	
};
