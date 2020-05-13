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

    // Esta función se ejecuta correctamente si la semana de producción por colaborador y finca aún no está registrados en el sistema
    inicializarDatosCajuelasSemanaActual(ide_finca,ide_colaborador);

    /// LIMPIAMOS LA TABLA ANTES DE REALIZAR UNA NUEVA CONSULTA
    var myTable = document.getElementById("table_control_produccion");
    var rowCount = myTable.rows.length;
    for (var x=rowCount-1; x>0; x--) {
        myTable.deleteRow(x);
    }
    ////////////////////////////////////////////////////////////
    
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_produccion/db_get_produccion_semanal_col.php?ide_colaborador_ingresado='+ide_colaborador+
    '&ide_finca_ingresado='+ide_finca,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){
                    
                    // Obtenemos el resultado de la consulta y la mostramos en la tabla respectiva
                    
                    var table = document.getElementById("table_control_produccion"); // Referencia a la tabla de lista de fincas que se desean actualizar
                    {
                        var row = table.insertRow(1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);                                               
                      
                        cell1.innerHTML = item.fecha;      
                        cell2.innerHTML = item.cajuelas;
                        cell3.innerHTML = item.cuartillos;                                             

                        // La celda 5 se le asignan atributos para mostrar y ejecutar la función de actualizar finca que fue seleccionado
                        cell4.innerHTML = "<td class='actions-hover actions-fade'><a href='javascript:panel_actualizar_finca();obtenerDatosFincaSeleccionadaActualizar("+item.ide+");'><i class='fa fa-pencil'></i></a></td>";
                
                    }   
                  
                }
                
            }
            
    }
       
}

/// *** 1.3.1 INICIALIZAR E INSERTAR LOS DÍAS SE LA SEMANA ACTUAL **

function inicializarDatosCajuelasSemanaActual(ide_finca,ide_colaborador){

    //++ OBTENEMOS LOS DÍAS DE LA SEMANA ACTUAL ++//

    let fecha_actual = new Date;
        
    for (let i = 0; i <= 7; i++) {
       
        let primer_dia = fecha_actual.getDate() - fecha_actual.getDay() + i; 
        let fecha = new Date(fecha_actual.setDate(primer_dia)).toISOString().slice(0, 10);
    
        const xhttp = new XMLHttpRequest();

        xhttp.open('GET','assets/php_db/db_produccion/db_initial_week_produccion.php?ide_finca_ingresado='+ide_finca+'&ide_colaborador_ingresado='+ide_colaborador
        +'&fecha_ingresada='+fecha,true);

        xhttp.send();
        
        xhttp.onreadystatechange = function(){

                if(this.readyState == 4 && this.status == 200){                            
                    
                    
                }
                
        }
    }
    
}
