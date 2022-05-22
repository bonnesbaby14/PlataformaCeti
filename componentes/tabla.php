

<?php 
require_once "../php/conexion.php";
$conexion=conexion();

?>
<div class="row">
    <div class="col-sm-12">
    <h2>Tabla de alumnos </h2>
     <caption>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modelAgregar">Agregar</button>
            </caption>
        <table class="table table-hover table-condensed table-bordered">
           
            <tr>
                <td>user</td> 
                <td>nombres</td>
                <td>apellidos</td> 
                <td>registro</td>
                <td>carrera</td>   
                <td>tipo de usuario</td> 
                <td>editar</td>
                <td>eliminar</td>      
            </tr>
            <?php
            $sql="select id,user, password,tipo from usuario";
            $result=mysqli_query($conexion,$sql);
            while($ver=mysqli_fetch_row($result)){

                ?>
 <tr>
                <td> <?php echo $ver[1]  ?> </td> 
                <td><?php echo $ver[1]  ?></td>
                <td><?php echo $ver[1]  ?></td> 
                <td><?php echo $ver[1]  ?></td>
                <td><?php echo $ver[1]  ?></td>  
                <td><?php echo $ver[1]  ?></td>  
                <td><button class="btn btn-warning" data-toggle="modal" data-target="#modelEditar">Editar</button></td>
                <td><button class="btn btn-danger" data-toggle="modal" data-target="#modelEliminar">Eliminar</button></td>      
            </tr>

<?php

            }




            ?>

           
        </table>


    </div>


</div>