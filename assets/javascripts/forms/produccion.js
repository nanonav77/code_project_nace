/// ESTE CÓDIGO SE ENCARGA DE LLEVAR A CABO LA FUNCIONALIDAD PARA CONSULTAR, CONTROLAR  Y REGISTRAR LA PRODUCCIÓN ///

/// --- 1. REGISTRAR Y CONTROLAR PRODUCCIÓN ---

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

