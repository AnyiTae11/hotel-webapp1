<html>
 <head>
  <title>APP Web </title>
<body> 
  <header>
    <div class="container">
   <center> <br><IMG SRC="HotelLogo.png" width= 20% ALIGN=center></br> </center><span class="boton4" id="btn-abrir-popup" class="btn-abrir-popup">Login de Empleados</span></IMG> 
   <link rel="stylesheet" href="EstiloMenuAA.css">


<div class="overlay" id="overlay">
      <div class="popup" id="popup">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>Login para Empleados</h3>
        <form action=".php" method="POST">
          <div class="contenedor-inputs">
            <input type="text" placeholder="Nombre" name="Nombre">
            <input type="password" placeholder="password" name="password">
          </div>
          <input type="submit" class="btn-submit" value="Ingresar">
       <script src="popup.js"></script>  
        </form>
  </div>

