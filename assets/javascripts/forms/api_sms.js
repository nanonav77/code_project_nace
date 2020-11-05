/// ESTE CÓDIGO SE ENCARGA DE EXTRAER EL NÚMERO TELEFÓNICO DEL COLABORADOR Y EL ENVIO DEL SMS AL MISMO ///


/// *** 1 OBTENER EL NÚMERO TELEFÓNICO DEL EMPLEADO**

function obtenerTelefonoColaborador(accion,idColaborador,fecha_seleccionada,nombre_finca,cajuelas_digitadas,cuartillos_digitados){  
       
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_produccion/db_get_telefono_colaborador.php?id_colaborador='+idColaborador,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){

                  envioSMS(accion,item.nombre,item.telefono,fecha_seleccionada,nombre_finca,cajuelas_digitadas,cuartillos_digitados); //llamamos la función del envio del sms luego de obtener el # telefónico del colaborador                  
                   
                }
                
            }
            
    }
    
}

/// *** 2 ENVIAR EL SMS A TRAVÉS DEL API EN EL CÓDIGO PHP **


function envioSMS(accion,nombre_colaborador,numero_telefono,fecha_seleccionada,nombre_finca,cajuelas_digitadas,cuartillos_digitados){  
   
  const xhttp = new XMLHttpRequest();

  xhttp.open('GET','assets/php_sms/send_sms.php?numero_telefono='+numero_telefono
  +'&accion_determinada='+accion+'&fecha_seleccionada='+fecha_seleccionada+'&cajuelas_digitadas='+cajuelas_digitadas
  +'&cuartillos_digitados='+cuartillos_digitados+'&nombre_finca='+nombre_finca
  +'&nombre_colaborador='+nombre_colaborador,true);

  xhttp.send();
  
  xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){

        
              
        }
                 
  }

}