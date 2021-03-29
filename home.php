<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Е-крводарител</title>
  <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
  <link rel="icon" href="img/logo.png" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
      <!--navbar-->
    <div class="navbar navbar-default navbar-static-top">
		<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                </div>

				<div class="navbar-collapse collapse">

					<ul class="nav navbar-nav">
                    <a href="index.html" class="navbar-brand"><img src="img/logo.png"></a>

                    <!--<li><a href="termini.php">Закажи термин</a></li> -->
                 <li>   <a href="termini.php"  data-target="#LoginModal">  <span class="glyphicon glyphicon-calendar"></span>Закажи термин</a> </li>


                       
                                <li>
         <a href="logout.php"  data-target="#LoginModal">  <span class="glyphicon glyphicon-log-out"></span> Одјави се</a>

                                    
                                </li>  
              
                        
                        </ul>
                    
                        </div>
                        </div>
                        </div>
                        <?php
if($_SESSION["ime"]) {
?>
<p style="color:red;">Добредојде  <?php echo $_SESSION["ime"]; ?>. 
<?php
}else echo "<h1>Please login first .</h1>";
?>    </p>        
                        
                        <div id="myCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/banner1.jpg" class="img-responsive" />
                                </div>
                                <div class="item">
                                    <img src="img/banner2.jpg"  class="img-responsive" />
                                </div>
                                <div class="item">
                                    <img src="img/banner3.jpg"  class="img-responsive" />
                                </div>
                                <div class="item">
                                    <img src="img/banner4.jpg"  class="img-responsive" />
                                </div>
                            </div>
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    
                        <!-- Carousel End
                        ============== -->
                        
                        <div class="counter">
                        <h3>Секои две секунди...</h3>
                       <p>Некој во светот има потреба од крв. Овој бројач покажува колку луѓе имаат потреба од крв од твоето пристигнување на оваа страница.</p>
                        <span class="seconds" id="seconds" style="line-height:5px ;" style="padding-top: 10px;"  style="padding-bottom: 70px;"></span>
                    </div>
                    </div>
                    

                  <div class="cards">
                      <div class="row">
                          <section class="col-md-6" >
                              <img src="img/thumb.png">
                              <h4>Донирај</h4>
                              <p>Закажи го твојот термин сега.</p>
                              <a href="termini.php" class="btn btn-danger">Донирај</a>

                          </section>
                          <section class="col-md-6">
                            <img src="img/plasma.png">
                            <h4>Конвалесцентна плазма</h4>
                            <p style="text-decoration: blue;">Донирај крвна плазма и помогни на пациентите кои се борат со Ковид 19.</p>
                            <a href="plasma.php" class="btn btn-danger">Донирај</a>


                          </section>
                          
                      </div>
                  </div>
                    
                    
                    
                        
                        <!-- Footer Area  -->
                 <footer class="mainfooter" role="contentinfo">
                    <div class="footer-middle">
                    <div class="container">

                        <div class="col-xs-3">
                            <h6>Следи не</h6>
                            <ul class="social-network social-circle">
                              <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>   
                               <li><a href="#" class="instagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>				
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 copy">
                            <p class="text-center">&copy; Авторски права 2020   E-крводарител.   Костадинка Стојанова</p>
                        </div>
                    </div>
                
                        </div>
                        </div>
                        </footer>





  </body>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/javascript.js"></script>
</body>
</html>