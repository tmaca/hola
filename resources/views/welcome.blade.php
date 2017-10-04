<!doctype html>
<html lang=>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <h2><a href="adios">HOLA MUNDO</a></h2>
	
<h2>FORMULARIO GET</h2>
<form method="get" action="adios">

<br />

Nombre: <input name="nombre" type="text" />

<br />

Edad: <input name="edad" type="text" checked="checked" />

<br />

<input type="submit" value="enviar" />
</form>

<form action="adiospost1" method="post">
<h2>FORMULARIO POST-1</h2>
<input type="hidden" name="_token" value=" {{ csrf_token () }}"><br />
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p><input type="submit" value="enviar" /></p>
</form>

<!-- lanzar excepcion -->
<form action="adiospost2" method="post">
<h2>FORMULARIO POST-2</h2>
<input type="hidden" name="_token" value=" {{ csrf_token () }}"><br />
{{ csrf_field() }}
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p><input type="submit" value="enviar" /></p>
</form>

    </body>
</html>
