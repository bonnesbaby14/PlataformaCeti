
function agregarDatos(user, password,registro, tipo) {
    
var cadena= {
        "user":user,
        "password":password,
        "registro":registro,
        "tipo":tipo

}


$.ajax({
type: "POST",
url: "php/agregarDatos.php",
data: cadena,
success:function(r){
    if(r==1){
     
        $('#tabla').load('componentes/tabla.php');
        alertify.success("Agregado!!!");

    }else{
        alertify.error("Error!!!");
    }
}

}); 

}

