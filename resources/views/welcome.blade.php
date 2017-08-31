<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registra Ventas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Tiendita</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Principal</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión </a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 col-xs-12 sidenav">
      <p>Fecha: {{date("d-m-Y")}}</p>
    </div>
    <div class="col-sm-8 col-xs-12 text-left"> 
      <h1>Ventas</h1>
      <p>Seleccione la categoría, anote la cantidad y oprima registrar.</p>
      <hr>
      <div class="col-sm-12 col-xs-12">
        <div class="col-sm-12 col-xs-12">
          <h3>Registro: </h3>
        </div>
        <div class="col-sm-6 col-xs-6">
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categoria
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li onclick="eligeCat(this.innerHTML)" style="padding:10px;">HTML</li>
                <li onclick="eligeCat(this.innerHTML)" style="padding:10px;">CSS</li>
                <li onclick="eligeCat(this.innerHTML)" style="padding:10px;">JavaScript</li>
            </ul>
          </div>
        </div>
        <div id="catElegida" class="col-sm-6 col-xs-6">
        </div>
      </div>
      <div class="col-sm-12 col-xs-12" style="padding:20px;">
        <div class="col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="precio">Precio Total:</label>
            <input type="number" class="form-control" id="precio">
          </div>
        </div>
        <div class="col-sm-6 col-xs-6">
          <br>
          <button type="button" class="btn btn-primary" onclick="registra()">Registrar</button>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-xs-12 sidenav">
      <div class="well col-xs-12">
        <p>Anuncio</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Mi tiendita</p>
</footer>
<script>
    function eligeCat(variable){
        document.getElementById('catElegida').innerHTML = variable;
    }
    
    function registra(){
        alert("Registrando... " + document.getElementById('catElegida').innerHTML + " Precio " + document.getElementById('precio').value);
    }
</script>
</body>
</html>
