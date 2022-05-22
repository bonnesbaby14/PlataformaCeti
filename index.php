<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="librerias\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias\alertify\css\alertify.css">
    <link rel="stylesheet" type ="text/css" href="librerias\alertify\css\themes\default.css">

    <script src="librerias/jquery.js" ></script>
    <script src="librerias\bootstrap\js\bootstrap.js"></script>
    <script src="librerias/alertify/alertify.js"></script>
    <script src="js/funciones.js"></script>

</head>
<body>
 
 <div class="container">
 <div id="tabla"> 
 </div>
 </div>



<!-- Editar -->
<div class="modal fade" id="modelEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Editar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">
           <label>Tipo de usuario</label>
            <select name="" id="" class="form-control" id="tipo">
                <option value="1">Alumno</option>
                <option value="2">Profesor</option>
                <option value="3">Administrador</option>
                
           </select>
            <label>Registro</label>
            <input type="text" class="form-control input-sm" id="registro2">
            <label>Usuario</label>
            <input type="text" class="form-control input-sm" id="usuario2">
            <label>Password</label>
            <input type="password" class="form-control input-sm" id="password21">
            <label>Password</label>
            <input type="password" class="form-control input-sm" id="password221">
s
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Agregar -->
<div class="modal fade" id="modelAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Nuevo usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
            <label>Tipo de usuario</label>
            <select name="" class="form-control" id="tipo">
                <option value="1">Alumno</option>
                <option value="2">Profesor</option>
                <option value="3">Administrador</option>
                
           </select>
            <label>Registro</label>
            <input type="text" class="form-control input-sm" id="registro">
            <label>Usuario</label>
            <input type="text" class="form-control input-sm" id="usuario">
            <label>Password</label>
            <input type="password" class="form-control input-sm" id="password">
            <label>Password</label>
            <input type="password" class="form-control input-sm" id="password2">



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
      </div>
    </div>
  </div>
</div>


<!-- Ellimir -->
<div class="modal fade" id="modelEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
$('#tabla').load('componentes/tabla.php');

})
</script>


<script type="text/javascript">
$(document).ready(function() {
    $('#btnGuardar').click(function(){
        registro=$('#registro').val();
        password=$('#password').val();
        user=$('#usuario').val();
        tipo=$('#tipo').val();

         agregarDatos(user,password,registro,tipo);
    }
    
    );
    
});

</script>