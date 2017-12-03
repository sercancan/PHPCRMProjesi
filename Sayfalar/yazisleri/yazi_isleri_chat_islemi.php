  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require 'LNKLER.php'; ?>
    
<script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>

     <script src="Tasarim_Eklentiler/bower_components/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="Tasarim_Eklentiler/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js"></script>
        
  <script type="text/javascript" src="chat.js"></script>
        
     <script>
             var jQueryIslem = $.noConflict(true);
    
(function($) {
$(document).ready(function($) {
               
 //Scrollable Chat
      $('.box').slimScroll({
        height: "500px",
        railOpacity: 0.9
      });


           $("#responsecontainer").load("yazi_isleri_process.php");
   var refreshId = setInterval(function() {
      $("#responsecontainer").load('yazi_isleri_process.php?randval='+ Math.random());
   }, 1000);



var name ="Sercan";
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    
    var tarih = new Date();
    
    	// display name on page
    	$("#name-area").html("<span>  " + name + " : </span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 	 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text,name+" : ");	
    			        $(this).val("");
    			        
                    } else {            
    					$(this).val(text.substring(0, maxLength));		
    				}	

    			  }
             });
            
    	});

            });
})(jQueryIslem);
         
  
  </script>
     
</head>
<body onload="setInterval('chat.update()', 1000)">
  
 <?php include 'sidebarr.php'; ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
                 <div class="col-lg-9 col-lg-offset-2">
          <div class="content-box big-box chat">

            <div class="content-title i-block">
              <h4 class="zero-m">Çalışanlar Arası Anlık Mesajlaşma Servisi</h4>
              <div class="content-tools i-block pull-right">
                <a class="repeat-btn">
                  <i class="fa fa-repeat"></i>
                </a>

              </div>
            </div>
              
            <div class="box">
              <ul class="chat-double chat-container">
                  <!--
                <li class="chat-inverted">
                  <img src="chat_profil_resims/kadin.jpg" class="img-circle user-avatar" alt="user">
                  <div class="chat-panel red-bg">
                    <div class="chat-heading clearfix">
                      <h4 class="pull-left zero-m">isim</h4>
                      <p class="pull-right"><i class="fa fa-clock-o"></i>10:00</p>
                    </div>
                    <div class="chat-body">
                      <p>yaz</p>
                    </div>
                    <span class="readed"><i class="fa fa-check"></i></span>
                  </div>
                </li>
                  -->
                  
                <li>
                  <img src="chat_profil_resims/erkek.jpg" class="img-circle user-avatar" alt="user">
                  <div class="chat-panel blue-bg">
                    <div class="chat-heading clearfix">  
                      <h4 class="pull-left zero-m">  
                          <!-- ISMIN YAZILDIGI YER-->
                          <p id="name-area"></p> 
                          
                      </h4>
                      <p class="pull-right"><i class="fa fa-clock-o"></i>TARIH SAAT</p>
                    </div>
                    <div class="chat-body">
                        <p id="responsecontainer">
                             <div><?php 
                            
                             
                            $al = fopen("yazi_isleri_chat.txt","r");
                           while($ver = fgets($al)){
                               echo $ver."<br>";
                            }
                                
                           fclose($al);
                            ?> </div>
                        
                            <!-- YAZILARIN GOSTERILDIGI YER -->
                           <div id="chat-area"></div>
                           
                        </p>
                    </div>
                    <span class="readed"><i class="fa fa-check"></i></span>
                  </div>
                </li>

               
              </ul>
            </div>
                
              
            <div class="input-group">
              <input type="text" id="sendie" maxlength = '100' class="form-control" placeholder="mesaj yaz.."/>
              <span class="input-group-btn">
                <button class="btn btn-warning text-uppercase waves" type="button">Send</button>
              </span>
            </div>
          </div>
        </div>
            
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
