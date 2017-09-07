@extends('layouts.app')

@section('contenido')

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 col-xs-12 sidenav">
      <p>Fecha: {{date("d-m-Y")}}</p>
    </div>
    <div class="col-sm-8 col-xs-12 text-left"> 
    <form action="{{ url('guardaOperacion')}}" method="get">
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
                <li onclick="eligeCat(this.innerHTML)" style="padding:10px;" name="categoria" value="1">Alimentos Excentos</li>
                <li onclick="eligeCat(this.innerHTML)" style="padding:10px;" name="categoria" value="2">Alimentos Grabados</li>
                <li onclick="eligeCat(this.innerHTML)" style="padding:10px;" name="categoria" value="3">Bebidas Alcoholicas</li>
                <li onclick="eligeCat(this.innerHTML)" style="padding:10px;" name="categoria" value="4">Cigarros</li>
                <li onclick="eligeCat(this.innerHTML)" style="padding:10px;" name="categoria" value="5">Otros</li>
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
            <input type="number" class="form-control" id="precio" name="precio">
          </div>
        </div>
        <div class="col-sm-6 col-xs-6">
          <br>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </div>
      </form>
    </div>
    <div class="col-sm-2 col-xs-12 sidenav">
      <div class="well col-xs-12">
        <p>Anuncio</p>
      </div>
    </div>
  </div>
</div>

@endsection