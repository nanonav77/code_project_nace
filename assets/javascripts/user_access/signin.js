
/// ESTE CÓDIGO SE ENCARGA DE LLEVAR A CABO LA VALIDACIÓN DE INICIO DE SESIÓN DE UN USUARIO ///

document.querySelector('#autenticacionBoton').addEventListener('click', autenticarUsuario); // Propiedad para que el botón Ingresar.. llame la siguiente función

function autenticarUsuario(){

    var id;

    var email = document.getElementById("username").value; //aquí se captura el usuario de red o el correo 
    var contrasena = document.getElementById("pwd").value ; //aquí se captura la contraseña ingresada
    
    const xhttp = new XMLHttpRequest();

    // Se envian los parámetros y se llama la función php de base datos para validar al usuario
    xhttp.open('GET','assets/php_db/access_user/db_user_signin.php?email_ingresado='+email+'&contrasena_ingresada='+contrasena,true);

    xhttp.send();

    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
 
                    let datos = JSON.parse(this.responseText);
           
                    for(let item of datos){
                         id = item.id; // si este ID es mayor a cero es por que el usuario está registrado
                         if(id>0){
                            alert(item.nombre_usuario+" "+item.apellidos_usuario); //se obtiene el nombre y apellidos del usuario
                            console.log('registrado');
                         }
                         else{
                            console.log('no registrado'); 
                         }
                         
                    }
                  
                    
            }
            
    }

}