
/// ESTE CÓDIGO SE ENCARGA DE LLEVAR A CABO LA FUNCIONALIDAD DE CREAR, ELIMINAR Y ACTUALIZAR LAS FINCAS ///

/// --- 1. REGISTRAR FINCA ---

/// *** 1.1 OBTENER EL ID DE LA NUEVA FINCA **

function obtenerIdNuevaFinca(){

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_fincas/db_get_new_idfinca.php',true);

    xhttp.send();

    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
 
                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){
                    
                    // Le asignamos el número de colaborador que continua 
                    document.getElementById("numero_insert_finca").value = item.indice;
                                      
                }
                                             
            }            
    }
}

/// *** 1.2 REALIZAR LA BUSQUEDA DE POSIBLES PROPIETARIOS **

function buscarPropietariosRegistroFincas(){
    
    document.getElementById('select_propietarios_finca').innerText = null;

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_propietarios/db_get_propietarios_totales.php',true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);

                var select_colaboradores_produccion = document.getElementById("select_propietarios_finca");
               
         
                for(let item of datos){

                    // Creamos el elemento con los datos de cada uno de los colaboradores
                    var elemento = document.createElement("option");
                    elemento.text = item.identificacion+" - "+item.nombre+" "+item.apellidos;
                    elemento.value = item.ide;

                    // Añadimos cada elemento al selector
                    select_colaboradores_produccion.options.add(elemento);
                    
                }
                
            }
            
    }
}

/// *** 1.3 REGISTRAR FINCA **

document.querySelector('#button_insert_finca').addEventListener('click', insertarFinca); // BOTON EJECUTA LA FUNCIÓN

function insertarFinca(){

    var nombre = document.getElementById("nombre_insert_finca").value;
    var ide_propietario = document.getElementById("select_propietarios_finca").value;
    var direccion = document.getElementById("direccion_insert_finca").value;
    
    
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_fincas/db_add_finca.php?nombre_ingresado='+nombre+'&ide_propietario_ingresado='+ide_propietario
    +'&direccion_ingresada='+direccion,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                var validacion_existencia = this.responseText; // variable trae el valor de php donde 0 ya está creado y 1 que se puede crear como nuevo registro
                
                if (validacion_existencia == 0){
                   
                    document.getElementById('default-error-insert-col').click();
                    
                }
                else{
                    
                    document.getElementById('default-success-insert-col').click();

                    // Como el registro se llevo a cabo correctamente actualizamos y vaciamos los campos
                    obtenerIdNuevaFinca();
                    document.getElementById('nombre_insert_finca').value = " ";
                    document.getElementById('direccion_insert_finca').value = " ";
           
                }
                
            }
            
    }
}


/// --- 2. ACTUALIZAR FINCA ---

/// *** 2.1 FUNCIÓN DE BUSCAR LAS FINCAS **

document.querySelector('#button_buscar_update_fincas').addEventListener('click', buscarFincaActualizar); // BOTON EJECUTA LA FUNCIÓN

function buscarFincaActualizar(){

    /// LIMPIAMOS LA TABLA ANTES DE REALIZAR UNA NUEVA CONSULTA
    var myTable = document.getElementById("table_update_fincas");
    var rowCount = myTable.rows.length;
    for (var x=rowCount-1; x>0; x--) {
        myTable.deleteRow(x);
    }
    ////////////////////////////////////////////////////////////

    var valor = document.getElementById("buscar_update_fincas").value;
    
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_fincas/db_get_fincas.php?valor_ingresado='+valor,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){
                    
                    // Obtenemos el resultado de la consulta y la mostramos en la tabla respectiva
                    
                    var table = document.getElementById("table_update_fincas"); // Referencia a la tabla de lista de fincas que se desean actualizar
                    {
                        var row = table.insertRow(1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                       
                      
                        cell1.innerHTML = item.numero;      
                        cell2.innerHTML = item.nombre;
                        cell3.innerHTML = item.direccion;
                        cell4.innerHTML = item.nombre_cli+" "+item.apellidos_cli;
                        

                        // La celda 5 se le asignan atributos para mostrar y ejecutar la función de actualizar finca que fue seleccionado
                        cell5.innerHTML = "<td class='actions-hover actions-fade'><a href='javascript:panel_actualizar_finca();obtenerDatosFincaSeleccionadaActualizar("+item.numero+");'><i class='fa fa-pencil'></i></a></td>";
                
                    }   
                  
                }
                
            }
            
    }
}

/// *** 2.2 FUNCIÓN PARA CONSULTAR LOS DATOS ACTUALES DE LA FINCA SELECCIONADA **

function obtenerDatosFincaSeleccionadaActualizar(numero){

    document.getElementById('select_update_propietarios_finca').innerText = null;

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_fincas/db_get_update_finca_seleccionada.php?numero_ingresado='+numero,true);

    xhttp.send();

    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
 
                let datos = JSON.parse(this.responseText);

                var select_finca_update = document.getElementById("select_update_propietarios_finca");
           
                for(let item of datos){
                    
                    // Mostramos los valores actuales del colaborador a seleccionado a actualizar
                    document.getElementById('number_update_finca').value = item.numero_finca;
                    document.getElementById('name_update_finca').value = item.nombre_finca;
                    document.getElementById('direccion_update_finca').value = item.direccion_finca;
                    
                    // Creamos el elemento con los datos del propietario actual de la finca
                    var elemento = document.createElement("option");
                    elemento.text = item.identificacion_propietario+" - "+item.nombre_propietario+" "+item.apellidos_propietario;
                    elemento.value = item.ide_propietario;

                    // Añadimos el elemento al selector
                    select_finca_update.options.add(elemento);

                   
                }
                                             
            }            
    }
}