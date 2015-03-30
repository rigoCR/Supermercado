<!DOCTYPE html>
<html>
<head>
<title>Sistema Control de Inventarios - Perimercados</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="expand header">
	<div class="container">
		<div class="logo col-xs-4 col-sm-6 col-md-6 col-lg-6 row"><img src="images/logo_peri.png"/></div>
		<div class="title col-xs-8 col-sm-6 col-md-6 col-lg-6 row"><p>Sistema Control de Inventario</p></div>
	</div>
</div>

<div class="container">
	<div class="col-xs-12 row">
		<a href="#" class="close-session">Cerrar Sesion</a>
	</div>
	<div class="col-xs-12 row form-busqueda">
			<form id="buscar-producto" name="buscar-producto" method="post" action="realizar-consulta.php">
				
	           	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	           		<label class="clearfix" for='nombre'>Buscar Nombre:</label>
						 <input class="clearfix rounded" type="text" name="nombre" id="nombre" placeholder="Nombre de producto" required/>
	          	</div>
	          	
	           	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	           	<label class="clearfix" for='nombre'>Ordenar por:</label>
	           	<div class="col-xs-12 select_join">
	           	<select name="Ordenar" id="Ordenar">
	           		<option value="NOMB">Nombre</option>
	           		<option value="ID">ID</option>
	           		<option value="CANT">Cantidad</option>
	           	</select>
	           </div>
	           	</div>
	           	
	           	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	           	<label class="clearfix" for='nombre'>Buscar por:</label>
	           	<div class="col-xs-12 select_join">
	           	<select name="Buscar-por" id="buscar-por">
	           		<option value="NOMB">Nombre</option>
	           		<option value="ID">ID</option>
	           		<option value="CANT">Cantidad</option>
	           	</select>
	           </div>
	           	</div>
				<button class="rounded buscar" type='submit'>Buscar</button>
			</form>
	</div>
	<div class="col-xs-12 row menu">
		<a href="#" class="new-product" data-toggle="modal" data-target="#Add-Product-Form">Agregar Producto</a>
	</div>
	<div class="col-xs-12 row">
	<table class="results" border="0" cellspacing="0" cellpadding="0">
  <tr class="head">
    <td width="13%">ID Producto</td>
    <td width="25%">Nombre de Producto</td>
    <td width="13%">Cantidad</td>
    <td width="25%">Descripci&oacute;n</td>
    <td width="8%">Editar</td>
    <td width="8%">Eliminar</td>
    <td width="8%">Ver</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a class="see" href="">Ver</a></td>
    <td><a class="edit" href="">update</a></td>
    <td><a id="dialogSencillo" class="delete">delete</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</div>

<div class="modal fade" id="Add-Product-Form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar un nuevo producto</h4>
      </div>
      <div class="modal-body row form-busqueda">
        <form id="agregar-producto" name="buscar-producto" method="post" action="agregar-producto.php">
				
	           	<div class="col-xs-12">
	           		<label class="clearfix" for='nombre'>ID Producto:</label>
						 <input class="clearfix rounded" type="text" name="id-producto" id="id-producto" placeholder="ID Producto" required/>
	          	</div>

	          	<div class="col-xs-12">
	           		<label class="clearfix" for='nombre'>Nombre de Producto:</label>
						 <input class="clearfix rounded" type="text" name="nombre" id="nombre" placeholder="Nombre de producto" required/>
	          	</div>

	          	<div class="col-xs-12">
	           		<label class="clearfix" for='nombre'>Cantidad:</label>
						 <input class="clearfix rounded" type="text" name="cantidad" id="cantidad" placeholder="Cantidad" required/>
	          	</div>

	          	<div class="col-xs-12">
	           		<label class="clearfix" for='nombre'>Descripci&oacute;n:</label>
						 <input class="clearfix rounded" type="text" name="descripcion" id="descripcion" placeholder="Descripci&oacute;n" required/>
	          	</div>
	          	
	           	<div class="col-xs-12">
	           	<label class="clearfix" for='nombre'>Departamento:</label>
	           	<div class="col-xs-12 select_join">
	           	<select name="Ordenar" id="Ordenar">
	           		<option value="NOMB">Carnicer&iacute;a</option>
	           		<option value="ID">Abarrotes</option>
	           		<option value="CANT">Verduler&iacute;a</option>
	           	</select>
	           </div>
	           	</div>
				<button class="rounded guardar" type='submit'>Agregar</button>
			</form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })
}

</script>

</body>

</html>