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

                  envioSMS(item.telefono); //llamamos la función del envio del sms luego de obtener el # telefónico del colaborador                  
                   
                }
                
            }
            
    }
    
}

/// *** 2 ENVIAR EL SMS A TRAVÉS DEL API EN EL CÓDIGO PHP **


function envioSMS(numero_telefono){  
   
  const xhttp = new XMLHttpRequest();

  xhttp.open('GET','assets/php_sms/send_sms.php?numero_telefono='+numero_telefono,true);

  xhttp.send();
  
  xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){

        
              
        }
                 
  }

}