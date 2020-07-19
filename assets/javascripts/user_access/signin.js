
/// ESTE CÓDIGO SE ENCARGA DE LLEVAR A CABO LA VALIDACIÓN DE INICIO DE SESIÓN DE UN USUARIO ///

function autenticarUsuario(){


   var listvalues = { "name": "value1", "2": "value2", "3": "value3" }
   localStorage.setItem('lists', JSON.stringify(listvalues)); 

    var id;

    var email = document.getElementById("username").value; //aquí se captura el usuario de red o el correo 
    var contrasena = document.getElementById("pwd").value ; //aquí se captura la contraseña ingresada
    
    alert(email);

    const xhttp = new XMLHttpRequest();

    // Se envian los parámetros y se llama la función php de base datos para validar al usuario
    xhttp.open('GET','assets/php_db/access_user/db_user_signin.php?email_ingresado='+email+'&contrasena_ingresada='+contrasena,true);

    xhttp.send();

    
    xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
 
                    let datos = JSON.parse(this.responseText);
           
                    for(let item of datos){

                         id = item.identificacion; // si este ID es mayor a cero es por que el usuario está registrado
                        
                         if(id>0){
                            
                            alert(item.nombre_usuario);
                            
                         }
                         else{
                            
                         }
                         
                    }
                  
                    
            }
            
    }

}