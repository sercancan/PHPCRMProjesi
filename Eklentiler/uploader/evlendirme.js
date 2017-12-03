
Dropzone.options.myAwesomeDropzone = {
          
       init:function(){
           
            var  bilgi;
           var eklenenDosyadi;
           var dosyaBoyutu;
         this.on("addedfile",function(file){
               // alert("Eklenen :"+file.name);
               
                 bilgi = $("#dosyaHakkindaBilgi").val();
               eklenenDosyadi = file.name;
                dosyaBoyutu = file.size;
             
               
               
               $.ajax({
                   type:"POST",
                   url:"yazi_isleri_evlendirme-birimi-dosyaYukle.php",
                   data:{
                        Veriekle:"DatabaseInsert",
                         aciklama:bilgi,
                         eklenenDosyadi:eklenenDosyadi,
                          dosyaBoyutu:dosyaBoyutu 
                      },
                   success:function(data,success){
                       $("#ajaxdanGelenVeri").html(data);
                   }
               
        });//AJAX
    });//addedfile
    
            this.on("removedfile",function(file){
               // alert("Silinen :"+file.name);

                 $.ajax({
                   type:"POST",
                   url:"yazi_isleri_evlendirme-birimi-dosyaYukle.php",
                   data:{filename : file.name},
                   success:function(data,success){
                       $("#ajaxdanGelenVeri").html(data);
                   }
               
        });//AJAX
           
         });//removefile  
       }, //init
                
                  url:"yazi_isleri_evlendirme-birimi-dosyaYukle.php",
                  acceptedFiles: "application/pdf,image/jpeg,.rar,.PNG,.gif,.jpg,.docx,.doc,.xlsx,.xls,.pptx,.txt", //hangi tipte veriler ekleyebilir
		  maxFilesize: 250, // KAÇ  in MB
               //   maxFiles:4, //kac tane ekleyebilir
                //  dictMaxFilesExceeded:"4 Resimden Fazla Yükleme Sınırı.",
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
