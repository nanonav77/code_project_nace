
/// ESTE CÓDIGO SE ENCARGA DE LLEVAR A CABO LA FUNCIONALIDAD DE CREAR, ELIMINAR Y ACTUALIZAR LOS COLABORADORES ///

/// --- 1. REGISTRAR COLABORADOR ---

/// *** 1.1 OBTENER EL ID DEL NUEVO COLABORADOR **

function obtenerIdNuevoColaborador(){

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_colaboradores/db_get_new_idcolaborador.php',true);

    xhttp.send();

    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
 
                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){
                    
                    // Le asignamos el número de colaborador que continua 
                    document.getElementById("numero_insert_colaborator").value = item.indice;
                                      
                }
                                             
            }            
    }
}

/// *** 1.2 REGISTRAR COLABORADOR **

document.querySelector('#button_insert_colaborator').addEventListener('click', insertarColaborador); // BOTON EJECUTA LA FUNCIÓN

function insertarColaborador(){

    var nombre = document.getElementById("name_insert_colaborator").value;
    var identificacion = document.getElementById("ide_insert_colaborator").value;
    var telefono = document.getElementById("tel_insert_colaborator").value;
    var correo = document.getElementById("email_insert_colaborator").value;
    
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_colaboradores/db_add_colaborador.php?nombre_ingresado='+nombre+'&identificacion_ingresado='+identificacion
    +'&telefono_ingresado='+telefono+'&email_ingresado='+correo,true);

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
                    obtenerIdNuevoColaborador();
                    
                    document.getElementById('name_insert_colaborator').value = " ";
                    document.getElementById('ide_insert_colaborator').value = " ";
                    document.getElementById('tel_insert_colaborator').value = " ";
                    document.getElementById('email_insert_colaborator').value = " ";
                }
                
            }
            
    }
}


/// --- 2. ACTUALIZAR COLABORADOR ---

/// *** 2.1 FUNCIÓN DE BUSCAR LOS COLABORADORES **

document.querySelector('#button_buscar_update_colaboradores').addEventListener('click', buscarColaboradorActualizar); // BOTON EJECUTA LA FUNCIÓN

function buscarColaboradorActualizar(){

    $("#table_update_colaboradores").find("tr:gt(0)").remove(); // Limpiamos la tabla para obtener los datos según los filtros  
     
    var valor = document.getElementById("buscar_update_colaboradores").value;
    
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_colaboradores/db_get_colaboradores.php?valor_ingresado='+valor,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){
                    
                    // Obtenemos el resultado de la consulta y la mostramos en la tabla respectiva
                    
                    var table = document.getElementById("table_update_colaboradores"); // Referencia a la tabla de lista de colaboradores que se desean actualizar
                    {
                        var row = table.insertRow(1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                        var cell6 = row.insertCell(5);
                      
                        cell1.innerHTML = item.numero;      
                        cell2.innerHTML = item.nombre;
                        cell3.innerHTML = item.identificacion;
                        cell4.innerHTML = item.telefono;
                        cell5.innerHTML = item.email;

                        // La celda 6 se le asignan atributos para mostrar y ejecutar la función de actualizar colaborador que fue seleccionado
                        cell6.innerHTML = "<td class='actions-hover actions-fade'><a href='javascript:panel_actualizar_colaborador();obtenerDatosColaboradorSeleccionadoActualizar("+item.numero+");'><i class='fa fa-pencil'></i></a></td>";
                
                    }   
                  
                }
                
            }
            
    }
}

/// *** 2.2 FUNCIÓN PARA CONSULTAR LOS DATOS ACTUALES DEL COLABORADOR SELECCIONADO **

function obtenerDatosColaboradorSeleccionadoActualizar(numero){

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_colaboradores/db_get_update_colaborador_seleccionado.php?numero_ingresado='+numero,true);

    xhttp.send();

    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
 
                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){
                    
                    // Mostramos los valores actuales del colaborador a seleccionado a actualizar
                    document.getElementById('number_update_colaborator').value = item.numero;
                    document.getElementById('name_update_colaborator').value = item.nombre;
                    document.getElementById('ide_update_colaborator').value = item.identificacion;
                    document.getElementById('tel_update_colaborator').value = item.telefono;
                    document.getElementById('email_update_colaborator').value = item.email;

                   
                }
                                             
            }            
    }
}


/// *** 2.3 FUNCIÓN PARA LLEVAR A CABO LA ACTUALIZACIÓN DE LOS DATOS ACTUALES DEL COLABORADOR **

document.querySelector('#button_update_colaborator').addEventListener('click', actualizarColaboradorSeleccionado); // BOTON EJECUTA LA FUNCIÓN

function actualizarColaboradorSeleccionado(){

    var numero = document.getElementById("number_update_colaborator").value;
    var nombre = document.getElementById("name_update_colaborator").value;
    var identificacion = document.getElementById("ide_update_colaborator").value;
    var telefono = document.getElementById("tel_update_colaborator").value;
    var correo = document.getElementById("email_update_colaborator").value;

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_colaboradores/db_update_colaborador.php?numero_ingresado='+numero+'&nombre_ingresado='+nombre
    +'&identificacion_ingresado='+identificacion+'&email_ingresado='+correo+'&telefono_ingresado='+telefono,true);

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

/// --- 3. ELIMINAR COLABORADOR ---

/// *** 2.1 FUNCIÓN DE BUSCAR LOS COLABORADORES **

document.querySelector('#button_buscar_delete_colaboradores').addEventListener('click', buscarColaboradorEliminar); // BOTON EJECUTA LA FUNCIÓN

function buscarColaboradorEliminar(){

    $("#table_delete_colaboradores").find("tr:gt(0)").remove(); // Limpiamos la tabla para obtener los datos según los filtros  
     
    var valor = document.getElementById("buscar_delete_colaboradores").value;
    
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_colaboradores/db_get_colaboradores.php?valor_ingresado='+valor,true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                let datos = JSON.parse(this.responseText);
           
                for(let item of datos){
                    
                    // Obtenemos el resultado de la consulta y la mostramos en la tabla respectiva
                    
                    var table = document.getElementById("table_delete_colaboradores"); // Referencia a la tabla de lista de colaboradores que se desean actualizar
                    {
                        var row = table.insertRow(1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                        var cell6 = row.insertCell(5);
                      
                        cell1.innerHTML = item.numero;      
                        cell2.innerHTML = item.nombre;
                        cell3.innerHTML = item.identificacion;
                        cell4.innerHTML = item.telefono;
                        cell5.innerHTML = item.email;

                        // La celda 6 se le asignan atributos para mostrar y ejecutar la función de eliminar colaborador que fue seleccionado
                        cell6.innerHTML = "<td class='actions-hover actions-fade'><a href='javascript:eliminarColaboradorSeleccionado("+item.numero+");'><i class='fa fa-trash-o'></i></a></td>";
                
                    }   
                  
                }
                
            }
            
    }
}

/// *** 2.3 FUNCIÓN PARA LLEVAR A CABO LA ELIMINACIÓN DEL COLABORADOR **


function eliminarColaboradorSeleccionado(numero){

    
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET','assets/php_db/db_colaboradores/db_delete_colaborador.php?numero_ingresado='+numero,true);

    xhttp.send();

    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
 
                var validacion = this.responseText; // variable trae el valor de php donde 0 error y 1 que se realizó la eliminación correctamente
                
                if (validacion == 0){
                   
                    document.getElementById('default-error-delete-col').click();
                    
                }
                else{
                    
                    document.getElementById('default-success-delete-col').click();
                    buscarColaboradorEliminar();

                }
                                             
            }            
    }
}
