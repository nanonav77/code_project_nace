
/// ESTE CÓDIGO SE ENCARGA DE LLEVAR A CABO LA FUNCIONALIDAD DE CREAR, ELIMINAR Y ACTUALIZAR LOS COLABORADORES ///

/// --- 1 INSERTAR USUARIO ---

document.querySelector('#button_insert_colaborator').addEventListener('click', insertarColaborador); // BOTON EJECUTA LA FUNCIÓN

function insertarColaborador(){

    var nombre = document.getElementById("name_insert_colaborator").value;
    var identificacion = document.getElementById("ide_insert_colaborator").value;
    var telefono = document.getElementById("tel_insert_colaborator").value;
    var correo = document.getElementById("email_insert_colaborator").value;
    var genero;

    // Obtener el género seleccionado por el usuario
    var radios = document.getElementsByName('gen_insert_colaborator');

    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            
            genero = radios[i].value;
            break;
        }
    }
    

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_add_colaborador.php?nombre_ingresado='+nombre+'&identificacion_ingresado='+identificacion
    +'&telefono_ingresado='+telefono+'&email_ingresado='+correo+'&genero_ingresado='+genero,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                var validacion_existencia = this.responseText; // variabla trae el valor de php donde 0 ya está creado y 1 que se puede crear como nuevo registro
                
                if (validacion_existencia == 0){
                    alert("El usuario de red o correo electrónico ya se encuentran registrados en la plataforma"); //Mensaje de que el usuario ya está creado
                   
                }
                else{
                    alert("El usuario ha sido registrado en la plataforma"); //Mensaje de que el usuario se puede insertar
                }
                
            }
            
    }
}
