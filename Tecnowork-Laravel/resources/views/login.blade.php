@extends ('layout.master')
@section ('content')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
    <link rel="stylesheet" href="css/HojaEstilos.css" type="text/css" />
</head>

<body class="bodyInicioSesion">

  <div class="divimgInicioSesion">
      <img src="imagenes/imgLogoInicioSesion.png" class="imgInicioSesion">
  </div>

  <div class="divformInicioSesion">

      <form class="form" action="agregar">

          <label for="correoUsuario" class="usuario">Usuario (Correo Registrado):</label>
          <input type="email" id="correoUsuario" placeholder="Escribe tu correo" name="email" required></input>  
          <label for="contraseña" class="contraseña">Contraseña:</label>
          <input type="password" id="contraseña" placeholder="Escribe tu contraseña" name="password" required></input>
          <input type="submit" name="enviar" value="Iniciar Sesión">
          <p><a href="registro_egresado">Registrate como Egresado </a> - <a href="registro_cliente">Registrate como Cliente</a></p>
          <p><a href="inicio"><img src="imagenes/imgBotInicio.png" width="47" height="44" title="Volver al Inicio" alt="Botón para volver al inicio" /></a></p>

      </form>
  </div>

</body>
</html>

@endsection