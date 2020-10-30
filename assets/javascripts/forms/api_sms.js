/// ESTE CÓDIGO SE ENCARGA DE EXTRAER EL NÚMERO TELEFÓNICO DEL COLABORADOR Y EL ENVIO DEL SMS AL MISMO ///


/// *** 1 OBTENER EL NÚMERO TELEFÓNICO DEL EMPLEADO**

function obtenerTelefonoColaborador(idColaborador){  
       
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_produccion/db_get_telefono_colaborador.php?id_colaborador='+idColaborador,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){

                  alert(item.telefono);                   
                   
                }
                
            }
                   
    }
}
