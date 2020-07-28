
/// ESTE CÓDIGO SE ENCARGA DE LLEVAR A CABO LA VALIDACIÓN DE INICIO DE SESIÓN DE UN USUARIO ///

function autenticarUsuario(){
   
    var formLogin = document.getElementById("form_login"); //obtenemos el  form de login para enviarlo si las credenciales ingresadas son correctas
    
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
                              
                    // Creamos un local storage para llevar los datos del usuario que ingresa a la pantalla principal
                    var listCredenciales = { "name": item.nombre_usuario+" "+item.apellidos_usuario, "tipo": item.rol_usuario}
                    localStorage.setItem('listsCredenciales', JSON.stringify(listCredenciales)); 
                                
                    formLogin.submit();// enviamos el form
                            
                }   
                                      
            }

            
    }
    indicarErrorLogin();
   
}

function indicarErrorLogin(){

        document.getElementById("default-error-login-user").click();
}