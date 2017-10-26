<body>
<!-- Imagen de traiguen -->

<img class="img-rounded" src="http://localhost/Codelgniter/fotitos/cabecera.jpg" width="100%" height="40%">
<!--Botones -->

<div class="btn-group btn-group-justified">
      <a href="#" class="btn btn-default"><b>Inicio</b></a>
      <a href="#" class="btn btn-default"><b>Nuestra historia</b></a>
<!-- boton despegable-->	  
	<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle"
          data-toggle="dropdown">
    <b>Catalogo</b> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
    <li><a href="#"><b> carnes </b></a></li>
	<? echo anchor ('/Controlador/boton1');?>
    <li><a href="#"> <b> pollos </b></a></li>
    <li><a href="#"> <b> carne especial </b></a></li>
	</ul>
		</div>
	  <a href="#" class="btn btn-default"><b>Recetas </b></a>
	  <a href="#" class="btn btn-default"><b>Inicio sesion</b></a>
	  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span><b>Comprar</b></a>
   </div>
<br>
<!-- fotos que van cambiando-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role=listbox>
    <div class="item active">
      <img class="img-rounded" src="p3.jpg"  width="100%" height="50%"/>
    </div>
    <div class="item">
      <img class="img-rounded" src="p1.jpg" width="100%" height="50%"/>
    </div>

    <div class="item">
      <img class="img-rounded" src="p2.jpg" width="100%" height="50%" />
  </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="100%">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<h5> Carniceria Traiguen te ofrece los mejores cortes junto con la comodidad de 
tener tus productos en la puerta de tu casa, para esto solo debes crear un usuario
y llenar tu carrito virtual </h5>

<center><img class="img-rounded" src="webpay.png" width="30%" height="30%"> </center>
</body>