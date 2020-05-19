/// ESTE CÓDIGO SE ENCARGA DE LLEVAR A CABO LA FUNCIONALIDAD PARA CONSULTAR, CONTROLAR  Y REGISTRAR LA PRODUCCIÓN ///

/// --- 1. REGISTRAR Y CONTROLAR PRODUCCIÓN ---

/// *** 1.1 OBTENER LA LISTA DE LOS COLABORADORES REGISTRADOS **

function buscarColaboradorRegistroProduccion(){
    
    document.getElementById('select_colaboradores_produccion').innerText = null;

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_colaboradores/db_get_colaboradores_totales.php',true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);

                var select_colaboradores_produccion = document.getElementById("select_colaboradores_produccion");
               
         
                for(let item of datos){

                    // Creamos el elemento con los datos de cada uno de los colaboradores
                    var elemento = document.createElement("option");
                    elemento.text = item.numero+" - "+item.nombre;
                    elemento.value = item.numero;

                    // Añadimos cada elemento al selector
                    select_colaboradores_produccion.options.add(elemento);
                    
                }
                
            }
            
    }
}

/// *** 1.2 OBTENER LA LISTA DE LAS FINCAS REGISTRADAS **

function buscarFincaRegistroProduccion(){

    document.getElementById('select_fincas_produccion').innerText = null;

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_fincas/db_get_fincas_totales.php',true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);

                var select_colaboradores_produccion = document.getElementById("select_fincas_produccion");
               
         
                for(let item of datos){

                    // Creamos el elemento con los datos de cada una de las fincas
                    var elemento = document.createElement("option");
                    elemento.text = item.numero+" - "+item.nombre;
                    elemento.value = item.numero;

                    // Añadimos cada elemento al selector
                    select_colaboradores_produccion.options.add(elemento);
                    
                }
                
            }
            
    }
}

/// *** 1.3 OBTENER LAS CAJUELAS DE LOS COLABORADORES ASOCIADAS A UNA DETERMINADA FINCA **

function obtenerCajuelasRegistradas(){

    
    var ide_colaborador = document.getElementById("select_colaboradores_produccion").value;
    var ide_finca = document.getElementById("select_fincas_produccion").value;

    const $tableID = $('#table_control_produccion');
    $("#tblBodyProduccion").empty();

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_produccion/db_get_produccion_semanal_col.php?ide_colaborador_ingresado='+ide_colaborador+
    '&ide_finca_ingresado='+ide_finca,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){
                    
                    // Obtenemos el resultado de la consulta y la mostramos en la tabla respectiva
                    
                    const newTr = `
                    <tbody id="tblBodyProduccion">
                    <tr >
                      <td class="pt-3-half" contenteditable="false">`+item.nombre_finca+`</td>
                      <td class="pt-3-half" contenteditable="false">`+item.fecha+`</td>
                      <td id="cajuelas_ide`+item.ide+`" class="pt-3-half" contenteditable="true">`+item.cajuelas+`</td>
                      <td id="cuartillos_ide`+item.ide+`" class="pt-3-half" contenteditable="true">`+item.cuartillos+`</td>
                      <td>
                        <button onclick="actualizarCajuelasColaborador(`+item.ide+`)" type="button" class="btn btn-primary btn-rounded btn-sm my-0 waves-effect waves-light">Actualizar</button>
                      </td>
                    </tr>
                    </tbody>`;
                    
                    $tableID.find('table').append(newTr); 
                                      
                }
                
            }
                   
    }
    inicializarDatosCajuelasSemanaActual(ide_finca,ide_colaborador);
       
}

/// *** 1.3.1 INICIALIZAR E INSERTAR LOS DÍAS SE LA SEMANA ACTUAL **

function inicializarDatosCajuelasSemanaActual(ide_finca,ide_colaborador){

    let fecha_actual = new Date; 
      
    const $tableID = $('#table_control_produccion');
    const newTr = `
    <tbody id="tblBodyProduccion">
    <tr >
      <td class="pt-3-half" contenteditable="false">Example</td>
      <td class="pt-3-half" contenteditable="false">`+fecha_actual.toISOString().slice(0, 10)+`</td>
      <td class="pt-3-half" contenteditable="true">0</td>
      <td class="pt-3-half" contenteditable="true">0</td>
      <td>
        <button type="button" class="btn btn-success btn-rounded btn-sm my-0 waves-effect waves-light">Insertar</button>
      </td>
    </tr>
    </tbody>`;
    
    $tableID.find('table').append(newTr);
     
        
}

/// *** 1.4 ACTUALIZAR LAS CAJUELAS DE UN COLABORADOR EN UNA FINCA QUE HAN SIDO REGISTRADAS POSTERIORMENTE **


function actualizarCajuelasColaborador(ide_registro){

    var cajuelas = document.getElementById("cajuelas_ide"+ide_registro).innerText;
    var cuartillos = document.getElementById("cuartillos_ide"+ide_registro).innerText;

    alert(cajuelas+"  "+cuartillos);
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_produccion/db_update_produccion_dia_colaborador.php?ide_ingresado='+ide_registro+
    '&cajuelas_ingresadas='+cajuelas+'&cuartillos_ingresados='+cuartillos,true);

    xhttp.send();

    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
 
                var validacion_existencia = this.responseText; // variable trae el valor de php donde 0 error y 1 que se realizó la actualización correctamente
                
                if (validacion_existencia == 0){
                   
                    document.getElementById('default-error-update-col').click();
                    
                }
                else{
                    
                    document.getElementById('default-success-update-col').click();


                }
                                             
            }            
    }
}