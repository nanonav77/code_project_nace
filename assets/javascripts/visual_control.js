
function seccion_crear_colaborador(){

    document.getElementById("seccion_crear_colaborador").style.display = "initial";

    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("panel_actualizar_colaborador").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";
    document.getElementById("seccion_registro_cajuelas").style.display = "none";
    document.getElementById("seccion_crear_finca").style.display = "none";
    document.getElementById("seccion_buscar_finca_act").style.display = "none";
    document.getElementById("seccion_lista_fincas_act").style.display = "none";
    document.getElementById("panel_actualizar_finca").style.display = "none";

    document.getElementById('name_insert_colaborator').value = " ";
    document.getElementById('ide_insert_colaborator').value = " ";
    document.getElementById('tel_insert_colaborator').value = " ";
    document.getElementById('email_insert_colaborator').value = " ";
}

function seccion_actualizar_colaborador(valor){

    document.getElementById("seccion_buscar_colaborador_act").style.display = "initial";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "initial";
    

    if (valor==1){

        document.getElementById('buscar_update_colaboradores').value = " ";
              
        /// LIMPIAMOS LA TABLA ANTES DE REALIZAR UNA NUEVA CONSULTA
        var myTable = document.getElementById("table_update_colaboradores");
        var rowCount = myTable.rows.length;
        for (var x=rowCount-1; x>0; x--) {
            myTable.deleteRow(x);
        }
    }
    

    document.getElementById("panel_actualizar_colaborador").style.display = "none";
    document.getElementById("seccion_crear_colaborador").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";
    document.getElementById("seccion_registro_cajuelas").style.display = "none";
    document.getElementById("seccion_crear_finca").style.display = "none";
    document.getElementById("seccion_buscar_finca_act").style.display = "none";
    document.getElementById("seccion_lista_fincas_act").style.display = "none";
    document.getElementById("panel_actualizar_finca").style.display = "none";
   
}

function seccion_eliminar_colaborador(){

    document.getElementById("seccion_buscar_colaborador_del").style.display = "initial";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "initial";

    document.getElementById("seccion_crear_colaborador").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("panel_actualizar_colaborador").style.display = "none";
    document.getElementById("seccion_registro_cajuelas").style.display = "none";
    document.getElementById("seccion_crear_finca").style.display = "none";
    document.getElementById("seccion_buscar_finca_act").style.display = "none";
    document.getElementById("seccion_lista_fincas_act").style.display = "none";
    document.getElementById("panel_actualizar_finca").style.display = "none";
 
    document.getElementById('buscar_delete_colaboradores').value = " ";
              
        /// LIMPIAMOS LA TABLA ANTES DE REALIZAR UNA NUEVA CONSULTA
        var myTable = document.getElementById("table_delete_colaboradores");
        var rowCount = myTable.rows.length;
        for (var x=rowCount-1; x>0; x--) {
            myTable.deleteRow(x);
        }
}


function panel_actualizar_colaborador(){

    
    document.getElementById("panel_actualizar_colaborador").style.display = "initial";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";
    document.getElementById("seccion_registro_cajuelas").style.display = "none";
    document.getElementById("seccion_crear_finca").style.display = "none";
    document.getElementById("seccion_buscar_finca_act").style.display = "none";
    document.getElementById("seccion_lista_fincas_act").style.display = "none";
    document.getElementById("panel_actualizar_finca").style.display = "none";
}

function seccion_registro_control_cajuelas(){

    document.getElementById("seccion_registro_cajuelas").style.display = "initial";


    document.getElementById("seccion_crear_colaborador").style.display = "none";    
    document.getElementById("panel_actualizar_colaborador").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";
    document.getElementById("seccion_crear_finca").style.display = "none";
    document.getElementById("seccion_buscar_finca_act").style.display = "none";
    document.getElementById("seccion_lista_fincas_act").style.display = "none";
    document.getElementById("panel_actualizar_finca").style.display = "none";

}


function seccion_registro_finca(){

    document.getElementById("seccion_crear_finca").style.display = "initial";
    
    document.getElementById("seccion_crear_colaborador").style.display = "none";    
    document.getElementById("panel_actualizar_colaborador").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";
    document.getElementById("seccion_registro_cajuelas").style.display = "none";
    document.getElementById("seccion_buscar_finca_act").style.display = "none";
    document.getElementById("seccion_lista_fincas_act").style.display = "none";
    document.getElementById("panel_actualizar_finca").style.display = "none";


    document.getElementById('nombre_insert_finca').value = " ";
    document.getElementById('direccion_insert_finca').value = " ";

    
}

function seccion_actualizacion_finca(valor){

    document.getElementById("seccion_buscar_finca_act").style.display = "initial";
    document.getElementById("seccion_lista_fincas_act").style.display = "initial";

    if (valor==1){

        document.getElementById('button_buscar_update_fincas').value = " ";
              
        /// LIMPIAMOS LA TABLA ANTES DE REALIZAR UNA NUEVA CONSULTA
        var myTable = document.getElementById("table_update_fincas");
        var rowCount = myTable.rows.length;
        for (var x=rowCount-1; x>0; x--) {
            myTable.deleteRow(x);
        }
    }
    
    document.getElementById("seccion_crear_colaborador").style.display = "none";    
    document.getElementById("panel_actualizar_colaborador").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";
    document.getElementById("seccion_registro_cajuelas").style.display = "none";
    document.getElementById("seccion_crear_finca").style.display = "none";
    document.getElementById("panel_actualizar_finca").style.display = "none";


    document.getElementById('nombre_insert_finca').value = " ";
    document.getElementById('direccion_insert_finca').value = " ";

    
}


function panel_actualizar_finca(){

    
    document.getElementById("panel_actualizar_finca").style.display = "initial";

    document.getElementById("panel_actualizar_colaborador").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";
    document.getElementById("seccion_registro_cajuelas").style.display = "none";
    document.getElementById("seccion_crear_finca").style.display = "none";
    document.getElementById("seccion_buscar_finca_act").style.display = "none";
    document.getElementById("seccion_lista_fincas_act").style.display = "none";
}
