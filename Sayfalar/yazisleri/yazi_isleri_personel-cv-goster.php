<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ana Sayfa</title>

<?php 
#HER SAYFA ICIN LAZIM OLAN ORTAK LINKLER TEK CATI ALTINDA TOPLAYIP BURDA EKLEDIM

include 'LNKLER.php';
?>
    
     <script type="text/javascript">

     </script>
<style>
    @import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css);

.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}

.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 25px;
  margin-right: -1.5px;
}

.timeline > li {
  margin-bottom: 20px;
  position: relative;
}

.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}

.timeline > li:after {
  clear: both;
}

.timeline > li > .timeline-panel {
  width: calc( 100% - 75px );
  float: right;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  padding: 20px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}

.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  left: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-right: 15px solid #ccc;
  border-left: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}

.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  left: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-right: 14px solid #fff;
  border-left: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}

.timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 0px;
  margin-right: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}

.timeline-badge.primary {
  background-color: #2e6da4 !important;
}

.timeline-badge.success {
  background-color: #3f903f !important;
}

.timeline-badge.warning {
  background-color: #f0ad4e !important;
}

.timeline-badge.danger {
  background-color: #d9534f !important;
}

.timeline-badge.info {
  background-color: #5bc0de !important;
}
</style>
</head>

<body>
<div id="wrapper">
  <div class="overlay"></div>
  <!-- Page Content -->
  <div id="page-content-wrapper">

      
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-0">
             
            
              <h1 class="page-header" style="color:black;">Özgeçmiş Bilgileri</h1>
           
          <div class="jquery-script-ads" style="margin:30px auto;">
              <script type="text/javascript">
</script>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-md-4 col-sm-4 col-sx-12">
                     <div class="container">
    <ul class="timeline">
        <li>
          <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"style="color:black;">Kişisel Bilgileri</h4>
            </div>
            <div class="timeline-body">
              <p style="color:black;">Durum</p>
            </div>
          </div>
        </li>
        
        <li>
          <div class="timeline-badge primary"><i class="fa fa-star-o"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"style="color:black;">İletişim Bilgileri</h4>
            </div>
            <div class="timeline-body">
              <p style="color:black;">Durum</p>
            </div>
          </div>
        </li>
        
        <li>
          <div class="timeline-badge warning"><i class="fa fa-sun-o"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title" style="color:black;">Eğitim Bilgileri</h4>
            </div>
            <div class="timeline-body">
              <p style="color:black;">Durum...</p>
            </div>
          </div>
        </li>
        
        <li>
          <div class="timeline-badge danger"><i class="fa fa-times-circle-o"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title" style="color:black;">Yetkinlik Bilgileri</h4>
            </div>
            <div class="timeline-body">
              <p style="color:black;">Durum...</p>
            </div>
          </div>
        </li>
        
        <li>
          <div class="timeline-badge success"><i class="fa fa-check-circle-o"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title" style="color:black;">İş Deneyimleri</h4>
            </div>
            <div class="timeline-body">
              <p style="color:black;">Durum..</p>
            </div>
          </div>
        </li>
        
        <li>
          <div class="timeline-badge default"><i class="fa fa-frown-o"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title" style="color:black;">Ek Bilgiler</h4>
            </div>
            <div class="timeline-body">
              <p style="color:black;">Durum.</p>
            </div>
          </div>
        </li>
    </ul>
</div>
                   
                  </div>
              </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper --> 
  
</div>
<!-- /#wrapper --> 

 
</body>
</html>
