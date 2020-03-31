
function seccion_crear_colaborador(){

    document.getElementById("seccion_crear_colaborador").style.display = "inline-block";

    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("panel_actualizar_colaborador").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";
}

function seccion_actualizar_colaborador(){

    document.getElementById("seccion_buscar_colaborador_act").style.display = "inline-block";
    document.getElementById("seccion_lista_colaboradores_act").style.display = "inline";

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
}

function panel_actualizar_colaborador(){

    
    document.getElementById("panel_actualizar_colaborador").style.display = "inline-block";
    
    document.getElementById("seccion_lista_colaboradores_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_act").style.display = "none";
    document.getElementById("seccion_buscar_colaborador_del").style.display = "none";
    document.getElementById("seccion_lista_colaboradores_del").style.display = "none";
}