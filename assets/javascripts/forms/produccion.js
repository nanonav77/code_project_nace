/// ESTE CÓDIGO SE ENCARGA DE LLEVAR A CABO LA FUNCIONALIDAD PARA CONSULTAR, CONTROLAR  Y REGISTRAR LA PRODUCCIÓN ///

/// --- 1. REGISTRAR Y CONTROLAR PRODUCCIÓN ---

/// *** 1.1 OBTENER LA LISTA DE LOS DÍAS DE LA SEMANA**

function listarDiasSemana(){
    
    
    /*document.getElementById('select_dias_produccion').innerText = null;

    var curr = new Date(); /// Obtenemos la semana actual
    var curr2 = new Date(); /// Utilizamos esta variable como apoyo para hacer la comparacion del día actual y así ponerlo como predeterminado en el selector

    // Listamos los nombres de los días para mostrarlos en el selector
    var weekday = new Array(7);
        weekday[0] = "(Lunes)";
        weekday[1] = "(Martes)";
        weekday[2] = "(Miércoles)";
        weekday[3] = "(Jueves)";
        weekday[4] = "(Viernes)";
        weekday[5] = "(Sábado)";
        weekday[6] = "(Domingo)";

    for (let i = 0; i <= 6; i++) {
        
        var first = curr.getDate() - curr.getDay() + i ;
        var day = new Date(curr.setDate(first)).toISOString().slice(0, 10);
        
        // Creamos el elemento con los datos de cada uno de los colaboradores
        var elemento = document.createElement("option");
        elemento.text = day +"  "+ weekday[i];
        elemento.value = day;
        
        //Añadimos cada elemento al selector
        select_dias_produccion.options.add(elemento);

        // Comparamos si el valor en lista es igual al día actual y así ponerlo predeterminado en el selector
        if(curr2.toISOString().slice(0, 10)==day){
            select_dias_produccion.selectedIndex = i-1;
        }
       
    }*/

}

/// *** 1.2 OBTENER LA LISTA DE LAS FINCAS REGISTRADAS **

function buscarFincaRegistroProduccion(select_respectivo){

    document.getElementById(select_respectivo).innerText = null;

    var select_fincas = document.getElementById(select_respectivo);

    var elemento = document.createElement("option");
    elemento.text = "Seleccionar..";
    select_fincas.options.add(elemento);

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_fincas/db_get_fincas_totales.php',true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);

                for(let item of datos){

                    // Creamos el elemento con los datos de cada una de las fincas
                    var elemento = document.createElement("option");
                    elemento.text = item.numero+" - "+item.nombre;
                    elemento.value = item.numero;

                    // Añadimos cada elemento al selector
                    select_fincas.options.add(elemento);
                    
                }
                
            }
            
    }
}

/// *** 1.3 OBTENER LAS CAJUELAS DE LOS COLABORADORES ASOCIADAS A UNA DETERMINADA FINCA **

function obtenerCajuelasRegistradas(){

    
    var fecha_seleccionada = document.getElementById("select_dias_produccion").value;
    var ide_finca = document.getElementById("select_fincas_produccion").value;
    var dato_colaborador_ingresado = document.getElementById("buscar_produccion_insert_colaboradores").value;
            
    $("#table_control_produccion").find("tr:gt(0)").remove(); // Limpiamos la tabla para obtener los datos según los filtros  
           
    const $tableID = $('#table_control_produccion');
    
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_produccion/db_get_produccion_semanal_col.php?fecha_ingresada='+fecha_seleccionada+
    '&ide_finca_ingresado='+ide_finca+'&colaborador_ingresado='+dato_colaborador_ingresado,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){
                    
                    var tipo_accion;
                    var cajuelas_iniciales;
                    var cuartillos_iniciales;
                 
                        
                    if (item.numero_finca > 0 ){
                        tipo_accion = '<button onclick="actualizarCajuelasColaborador('+item.id_registro+')" type="button" class="btn btn-primary btn-rounded btn-sm my-0 waves-effect waves-light">Guardar</button>';
                        cajuelas_iniciales = item.cajuelas;
                        cuartillos_iniciales = item.cuartillos;
                    }

                    if (item.numero_finca == 0 ){ // Validamos si está registrada la producción de ese día en dicha finca para saber que opción proporcionar al usuario
                        tipo_accion = '<button onclick="insertarCajuelasColaborador('+item.numero_colaborador+')" type="button" class="btn btn-success btn-rounded btn-sm my-0 waves-effect waves-light">Insertar</button>';
                        cajuelas_iniciales = " ";
                        cuartillos_iniciales = " ";
                    }                                   

                    // Obtenemos el resultado de la consulta y la mostramos en la tabla respectiva
                                        
                    const newTr = `
                        <tbody id="tblBodyProduccion">
                        <tr >
                        <td class="pt-3-half" contenteditable="false">`+item.numero_colaborador+`</td>
                        <td class="pt-3-half" contenteditable="false">`+item.nombre_colaborador+`</td>
                        <td class="pt-3-half" contenteditable="false">`+fecha_seleccionada+`</td>
                        <td id=cajuelas_ide`+item.id_registro+` class="pt-3-half" contenteditable="true">`+cajuelas_iniciales+`</td>
                        <td id=cuartillos_ide`+item.id_registro+` class="pt-3-half" contenteditable="true">`+cuartillos_iniciales+`</td>
                        <td>
                            `+tipo_accion+`
                        </td>
                        </tr>
                        </tbody>`;
                        
                    $tableID.find('table').append(newTr); 
                                   
                }
                
            }
                   
    }
   
}


/// *** 1.3.1 FUNCIÓN PARA INSERTAR INICIALMENTE LAS CAJUELAS DE UN COLABORADOR **

function insertarCajuelasColaborador(numero_colaborador){

    var fecha_seleccionada = document.getElementById("select_dias_produccion").value;
    var ide_finca = document.getElementById("select_fincas_produccion").value;
    var cajuelas_digitadas;
    var cuartillos_digitados; 
    

    // RECORREMOS LA TABLA PARA OBTENER EL REGISTRO EN ESPECÍFICO QUE DESEAMOS INSERTAR
    var tablaProduccion = document.getElementById("table_control_produccion_editable")

    for ( var i = 0; row = tablaProduccion.rows[i]; i++ ) {
        row = tablaProduccion.rows[i];
        for ( var j = 0; col = row.cells[j]; j++ ) {

            if (col.firstChild.nodeValue == numero_colaborador){
                cajuelas_digitadas = row.cells[j+3].firstChild.nodeValue;
                cuartillos_digitados = row.cells[j+4].firstChild.nodeValue;
                break;
            }
            
        }
    }
    /// Insertar el registro finalmente en la base de datos
    insertarCajuelasColaboradorBaseDatos(numero_colaborador,fecha_seleccionada,ide_finca,cajuelas_digitadas,cuartillos_digitados);
}

/// *** 1.3.1.1 FUNCIÓN PARA INSERTAR INICIALMENTE LAS CAJUELAS DE UN COLABORADOR EN LA BASE DE DATOS**

function insertarCajuelasColaboradorBaseDatos(numero_colaborador,fecha_seleccionada,ide_finca,cajuelas_digitadas,cuartillos_digitados){

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_produccion/db_insert_produccion_diario.php?ide_colaborador='+numero_colaborador
    +'&ide_finca='+ide_finca+'&fecha='+fecha_seleccionada+'&cajuelas='+cajuelas_digitadas
    +'&cuartillos='+cuartillos_digitados,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                var validacion_existencia = this.responseText; // variable trae el valor de php donde 0 ya está creado y 1 que se puede crear como nuevo registro
                
                if (validacion_existencia == 0){
                   
                    document.getElementById('default-error-insert-produccion-col').click();
                    
                }
                else{
                    
                    document.getElementById('default-success-insert-produccion-col').click();

                }
                
            }            
    }

    obtenerCajuelasRegistradas(); // Volvemos a llamar la función para actualizar la tabla con los datos
    
}

/// *** 1.3.2 ACTUALIZAR LAS CAJUELAS DE UN COLABORADOR EN UNA FINCA QUE HAN SIDO REGISTRADAS POSTERIORMENTE **


function actualizarCajuelasColaborador(ide_registro){

    var cajuelas = document.getElementById("cajuelas_ide"+ide_registro).innerText;
    var cuartillos = document.getElementById("cuartillos_ide"+ide_registro).innerText;

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_produccion/db_update_produccion_dia_colaborador.php?ide_ingresado='+ide_registro+
    '&cajuelas_ingresadas='+cajuelas+'&cuartillos_ingresados='+cuartillos,true);

    xhttp.send();

    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
 
                var validacion_existencia = this.responseText; // variable trae el valor de php donde 0 error y 1 que se realizó la actualización correctamente
                
                if (validacion_existencia == 0){
                   
                    document.getElementById('default-error-update-produccion-col').click();
                    
                }
                else{
                    
                    document.getElementById('default-success-update-produccion-col').click();


                }
                                             
            }            
    }

    obtenerCajuelasRegistradas(); // Volvemos a llamar la función para actualizar la tabla con los datos
}