
function seccion_crear_colaborador(){

    document.getElementById("seccion_crear_colaborador").style.display = "inline-block";

    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("panel_actualizar_colaborador").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";

    document.getElementById('name_insert_colaborator').value = " ";
    document.getElementById('ide_insert_colaborator').value = " ";
    document.getElementById('tel_insert_colaborator').value = " ";
    document.getElementById('email_insert_colaborator').value = " ";
}

function seccion_actualizar_colaborador(valor){

    document.getElementById("seccion_buscar_colaborador_act").style.display = "inline-block";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "inline";
    

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
}

function seccion_eliminar_colaborador(){

    document.getElementById("seccion_buscar_colaborador_del").style.display = "inline";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "inline";

    document.getElementById("seccion_crear_colaborador").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("panel_actualizar_colaborador").style.display = "none";

    document.getElementById('buscar_delete_colaboradores').value = " ";
              
        /// LIMPIAMOS LA TABLA ANTES DE REALIZAR UNA NUEVA CONSULTA
        var myTable = document.getElementById("table_delete_colaboradores");
        var rowCount = myTable.rows.length;
        for (var x=rowCount-1; x>0; x--) {
            myTable.deleteRow(x);
        }
}

function panel_actualizar_colaborador(){

    
    document.getElementById("panel_actualizar_colaborador").style.display = "inline-block";
    
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";
}